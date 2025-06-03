<?php

namespace App\Controllers;

use App\Models\Newsletter;
use Respect\Validation\Validator as v;
use App\Helpers\Helpers as Helper;

class NewsletterController extends Controller
{
    const currentPage = 'newsletter';    
    const currentTitle = 'Newsletter';

    // Método para cadastrar no newsletter via AJAX
    public function subscribe($request, $response)
    {
        try {
            $parsedBody = $request->getParsedBody();
            
            // Validação básica
            $validation = $this->container->get('validator')->validate($request, [
                'email' => v::notEmpty()->email(),
            ]);

            if ($validation->failed()) {
                return $response->withJson([
                    'success' => false,
                    'message' => 'E-mail inválido!'
                ], 400);
            }

            $email = $parsedBody['email'] ?? null;
            $nome = $parsedBody['nome'] ?? null;
            $telefone = $parsedBody['telefone'] ?? null;
            
            // Verificar se e-mail já existe
            $existingNewsletter = Newsletter::where('email', $email)->first();
            
            if ($existingNewsletter) {
                return $response->withJson([
                    'success' => false,
                    'message' => 'Este e-mail já está cadastrado em nossa newsletter!'
                ], 400);
            }

            // Capturar informações adicionais
            $userAgent = $request->getHeader('User-Agent')[0] ?? '';
            $ipAddress = $this->getClientIpAddress($request);
            
            Newsletter::create([
                'email' => $email,
                'nome' => $nome,
                'telefone' => $telefone,
                'data_cadastro' => date('Y-m-d H:i:s'),
                'ip' => $ipAddress,
                'user_agent' => $userAgent,
                'origem' => 'popup_exit_intent',
                'status' => 1
            ]);

            // Enviar e-mail de confirmação (opcional)
            $this->sendAdminNotification($email, $nome, $telefone);

            // Garantir que retorna JSON válido
            $responseData = [
                'success' => true,
                'message' => 'Cadastro realizado com sucesso! Obrigado por se inscrever em nossa newsletter.'
            ];
            
            $response->getBody()->write(json_encode($responseData));
            return $response->withHeader('Content-Type', 'application/json')->withStatus(200);

        } catch (\Exception $e) {
            // Log do erro detalhado
            error_log('Erro no Newsletter::subscribe - ' . $e->getMessage() . ' - Trace: ' . $e->getTraceAsString());
            
            $errorData = [
                'success' => false,
                'message' => 'Erro interno. Tente novamente.'
            ];
            
            $response->getBody()->write(json_encode($errorData));
            return $response->withHeader('Content-Type', 'application/json')->withStatus(500);
        }
    }

    // Método para retornar HTML do popup
    public function getPopupHtml($request, $response)
    {
        return $this->container->get('view')->render($response, 'site/components/newsletter-popup.twig');
    }

    // Método para listar newsletters no admin
    public function index($request, $response)
    {
        $getParams = $request->getQueryParams();

        $filtro = $getParams['filtro'] ?? null;
        $filtro_campos = array('email', 'nome');
        $getFilters = Helper::getFilters(array('filtro'=>$filtro));

        $pageCurrent = @(int)$getParams['page'];
        $itens = Newsletter::orderBy('data_cadastro', 'DESC');

        if($filtro)
        {
            $itens = $itens->Filter($filtro, $filtro_campos);
        }

        $itens = $itens->Paginates(array('limite'=>$this->container->get('configs')['pagesLimit'],'page'=>$pageCurrent));
        $pagesLink = Helper::getPaginate(array('current'=>$pageCurrent,'pages'=>$itens->lastPage(),'links'=>$getFilters));       

        $data = [
            'page' => self::currentPage,
            'title' => self::currentTitle,
            'data' =>  $itens,
            'total' => Newsletter::count(),
            'pagesLink' =>  $pagesLink,
            'pageCurrent' =>  $pageCurrent,
            'getFilters' => $getFilters,
            'filtros' => array('filtro'=>$filtro)
        ];

        return $this->container->get('view')->render($response, 'admin/'.self::currentPage.'/index.twig',$data);
    }

    // Método para deletar newsletter
    public function delete($request, $response, $args)
    {
        $id = $args['id'];
        $newsletter = Newsletter::find($id);

        if (!$newsletter) {
            $this->container->get('flash')->addMessage('error', 'Newsletter não encontrada!');
        } else {
            $newsletter->delete();
            $this->container->get('flash')->addMessage('success', 'Newsletter removida com sucesso!');
        }
        
        return $this->redirect($request, $response, 'app.'.self::currentPage);
    }

    // Método para exportar dados
    public function export($request, $response)
    {
        $newsletters = Newsletter::orderBy('data_cadastro', 'DESC')->get();
        
        $filename = 'newsletter_' . date('Y-m-d_H-i-s') . '.csv';
        
        $response = $response->withHeader('Content-Type', 'text/csv');
        $response = $response->withHeader('Content-Disposition', 'attachment; filename="' . $filename . '"');
        
        $output = fopen('php://output', 'w');
        
        // Cabeçalho do CSV
        fputcsv($output, ['Nome', 'E-mail', 'Telefone', 'Data Cadastro']);
        
        // Dados
        foreach ($newsletters as $newsletter) {
            fputcsv($output, [
                $newsletter->nome,
                $newsletter->email,
                $newsletter->telefone,
                $newsletter->data_cadastro
            ]);
        }
        
        fclose($output);
        
        return $response;
    }

    // Método privado para obter IP do cliente
    private function getClientIpAddress($request)
    {
        $serverParams = $request->getServerParams();
        
        $ipKeys = ['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'];
        
        foreach ($ipKeys as $key) {
            if (array_key_exists($key, $serverParams) === true) {
                foreach (explode(',', $serverParams[$key]) as $ip) {
                    $ip = trim($ip);
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        
        return $serverParams['REMOTE_ADDR'] ?? '';
    }

    // Método privado para enviar e-mail de notificação para o admin
    private function sendAdminNotification($email, $nome, $telefone)
    {
        try {
            $payload = [
                'to_name' => 'Admin',
                'to_email' => $this->container->get('appEmail'),
                'd' => array(
                    'nome' => $nome,
                    'email' => $email,
                    'telefone' => $telefone,
                    'data' => date('d/m/Y H:i:s'),
                )
            ];

            $this->container->get('mail')->send($payload, 'newsletter_admin_notification.twig', 'Novo cadastro na Newsletter Mareplast');
        } catch (\Exception $e) {
            // Log do erro mas não falha o processo principal
            error_log('Erro ao enviar e-mail de notificação: ' . $e->getMessage());
        }
    }
} 