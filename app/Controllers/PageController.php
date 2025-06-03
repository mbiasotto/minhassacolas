<?php

namespace App\Controllers;

use App\Models\Produto;
use App\Models\Cliente;
use App\Helpers\Helpers as Helper;
use Respect\Validation\Validator as v;

class PageController extends Controller
{    
    public function home($request, $response)
    {
        $cliente = Cliente::orderby('ordem','ASC')->get();

        $data = [            
            'clientes' => $cliente
        ];
        
        return $this->container->get('view')->render($response,'site/index.twig',$data);
    }

    public function quemSomos($request, $response)
    {
        
        $cliente = Cliente::orderby('ordem','ASC')->get();

        $data = [            
            'clientes' => $cliente
        ];
        
        return $this->container->get('view')->render($response,'site/quem-somos.twig',$data);
    }

    public function contato($request, $response)
    {
        $data = [
        ];
        
        return $this->container->get('view')->render($response,'site/contato.twig',$data);
    }

    public function contatoSend($request, $response)
    {
        // Verify reCAPTCHA token
        $parsedBody = $request->getParsedBody();
        $recaptchaToken = $parsedBody['g-recaptcha-token'] ?? null;
        
        if ($recaptchaToken) {
            $recaptchaSecret = '6LdMiPQqAAAAAKpwUg3FAe77cSMReJqdGdPTPQ4j';
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$recaptchaSecret.'&response='.$recaptchaToken);
            $responseData = json_decode($verifyResponse);
            
            if (!$responseData->success || $responseData->score < 0.5) {
                $this->container->get('flash')->addMessage('error', 'Falha na verificação de segurança. Por favor, tente novamente.');
                return $this->redirect($request, $response, 'contato');
            }
        } else {
            $this->container->get('flash')->addMessage('error', 'Falha na verificação de segurança. Por favor, tente novamente.');
            return $this->redirect($request, $response, 'contato');
        }

        $validation = $this->container->get('validator')->validate($request, [
            'nome' => v::notEmpty()->length(4),
            'telefone' => v::notEmpty()->length(9),
            'email' => v::notEmpty()->noWhitespace()->email(),
        ]);

        if ($validation->failed()) {
            $this->container->get('flash')->addMessage('error', 'Dados inválidos, tente novamente!');
            return $this->redirect($request, $response, 'contato');
        }

        $parsedBody = $request->getParsedBody();
        $nome = $parsedBody['nome'] ?? null;
        $telefone = $parsedBody['telefone'] ?? null;
        $email = $parsedBody['email'] ?? null;
        $empresa = $parsedBody['empresa'] ?? null;
        $subject = $parsedBody['subject'] ?? null;
        $mensagem = $parsedBody['mensagem'] ?? null;
        
        $payload = [
            'to_name' => $this->container->get('appName'),
            'to_email' => $this->container->get('appEmail'),
            'd' => array(
                'data' => date('d/m/Y'),
                'nome' => $nome,
                'email' => $email,
                'telefone' => $telefone,
                'empresa' => $empresa,
                'subject' => $subject,
                'mensagem' => $mensagem,
            )
        ];

        $this->container->get('mail')->send($payload, 'contato.twig', 'Contato - Site');

        return $this->redirect($request, $response, 'contato_sucesso');
    }

    public function contatoSucesso($request, $response)
    {
        $data = [];

        return $this->container->get('view')->render($response, 'site/contato-sucesso.twig', $data);
    }

    public function atendimento($request, $response)
    {
        $data = [];
        
        return $this->container->get('view')->render($response,'site/atendimento-personalizado.twig',$data);
    }

    public function produtos($request, $response)
    {
        
        $data = [];
        
        return $this->container->get('view')->render($response,'site/produtos.twig',$data);
    }
    
    public function produtoDetalhe($request, $response, $args)
    {
        $slug = $args['slug'];
        
        $produto = Produto::where('slug', $slug)
            ->where('status', 1)
            ->with(['imagens' => function($query) {
                $query->orderBy('ordem', 'ASC');
            }])
            ->first();
        
        if (!$produto) {
            return $this->redirect($request, $response, 'produtos');
        }
        
        $data = [
            'produto' => $produto
        ];
        
        return $this->container->get('view')->render($response, 'site/produto-detalhe.twig', $data);
    }

    public function sacolasPapel($request, $response)
    {
        $data = [            
            'configs' => $this->container->get('configs')
        ];
        
        return $this->container->get('view')->render($response,'site/produtos/sacolas-papel.twig',$data);
    }

    public function sacolasPlastico($request, $response)
    {
        $data = [            
            'configs' => $this->container->get('configs')
        ];
        
        return $this->container->get('view')->render($response,'site/produtos/sacolas-plastico.twig',$data);
    }

    public function envelopes($request, $response)
    {
        $data = [            
            'configs' => $this->container->get('configs')
        ];
        
        return $this->container->get('view')->render($response,'site/produtos/envelopes.twig',$data);
    }

    public function impressos($request, $response)
    {
        $data = [            
            'configs' => $this->container->get('configs')
        ];
        
        return $this->container->get('view')->render($response,'site/produtos/impressos.twig',$data);
    }

    public function termo($request, $response)
    {
        $data = [            
            'configs' => $this->container->get('configs')
        ];

        return $this->container->get('view')->render($response,'sis/termo.twig',$data);
    }    
    
    public function politica($request, $response)
    {
        $data = [            
            'configs' => $this->container->get('configs')
        ];

        return $this->container->get('view')->render($response,'sis/politica.twig',$data);
    }

    public function politicaPrivacidade($request, $response)
    {
        $data = [];
        
        return $this->container->get('view')->render($response, 'site/politica-privacidade.twig', $data);
    }
}