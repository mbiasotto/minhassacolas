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
            'clientes' => $cliente,
            'configs' => $this->configs
        ];
        
        return $this->container->get('view')->render($response,'site/index.twig',$data);
    }

    public function quemSomos($request, $response)
    {
        
        $cliente = Cliente::orderby('ordem','ASC')->get();

        $data = [            
            'clientes' => $cliente,
            'configs' => $this->configs
        ];
        
        return $this->container->get('view')->render($response,'site/quem-somos.twig',$data);
    }

    public function contato($request, $response)
    {
        $data = [            
            'configs' => $this->configs
        ];
        
        return $this->container->get('view')->render($response,'site/contato.twig',$data);
    }

    public function contatoSend($request, $response)
    {

        $validation = $this->container->validator->validate($request, [
            'nome' => v::notEmpty()->length(4),
            'telefone' => v::notEmpty()->length(9),
            'email' => v::notEmpty()->noWhitespace()->email(),
            'cnpj' => v::notEmpty()->length(14)
        ]);

        if ($validation->failed()) {
            $this->container->flash->addMessage('error', 'Dados inválidos, tente novamente!');
            return $response->withRedirect($this->container->router->pathfor('contato'));
        }

        $nome = $request->getParam('nome');
        $telefone = $request->getParam('telefone');
        $email = $request->getParam('email');
        $cnpj = $request->getParam('cnpj');
        $mensagem = $request->getParam('mensagem');
        
        $payload = [
            'to_name' => $this->container->appName,
            'to_email' => $this->container->appEmail,
            'copyTo' => array(array('email' => 'marketing@axt.com.br', 'name'=> 'Marketing'),array('email' => 'claudia.trabuco@axt.com.br', 'name'=> 'Claudia')),
            'd' => array(
                'data' => date('d/m/Y'),
                'nome' => $nome,
                'email' => $email,
                'telefone' => $telefone,
                'cnpj' => $cnpj,
                'mensagem' => $mensagem,
            )
        ];

        $this->container->mail->send($payload, 'contato.twig', 'Contato - Site');

        return $response->withRedirect($this->container->router->pathFor('contato_sucesso'));
    }

    public function contatoSucesso($request, $response)
    {
        $data = [
            'configs' => $this->configs,
        ];

        return $this->container->view->render($response, 'site/contato_sucesso.twig', $data);
    }

    public function comoComprar($request, $response)
    {
        $data = [            
            'configs' => $this->configs
        ];
        
        return $this->container->get('view')->render($response,'site/como-comprar.twig',$data);
    }

    public function produtos($request, $response)
    {
        
        $data = [            
            'configs' => $this->configs
        ];
        
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
            return $response->withRedirect($this->container->router->pathFor('produtos'));
        }
        
        $data = [
            'produto' => $produto,
            'configs' => $this->configs
        ];
        
        return $this->container->get('view')->render($response, 'site/produto-detalhe.twig', $data);
    }

    public function sacolasPapel($request, $response)
    {
        $data = [            
            'configs' => $this->configs
        ];
        
        return $this->container->get('view')->render($response,'site/produtos/sacolas-papel.twig',$data);
    }

    public function sacolasPlastico($request, $response)
    {
        $data = [            
            'configs' => $this->configs
        ];
        
        return $this->container->get('view')->render($response,'site/produtos/sacolas-plastico.twig',$data);
    }

    public function envelopes($request, $response)
    {
        $data = [            
            'configs' => $this->configs
        ];
        
        return $this->container->get('view')->render($response,'site/produtos/envelopes.twig',$data);
    }

    public function impressos($request, $response)
    {
        $data = [            
            'configs' => $this->configs
        ];
        
        return $this->container->get('view')->render($response,'site/produtos/impressos.twig',$data);
    }

    public function termo($request, $response)
    {
        $data = [            
            'configs' => $this->configs
        ];

        return $this->container->get('view')->render($response,'sis/termo.twig',$data);
    }    
    
    public function politica($request, $response)
    {
        $data = [            
            'configs' => $this->configs
        ];


        return $this->container->get('view')->render($response,'sis/politica.twig',$data);
    }


}