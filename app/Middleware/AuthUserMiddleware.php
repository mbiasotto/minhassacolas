<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Routing\RouteContext;
use Psr\Http\Message\ResponseFactoryInterface;  // Certifique-se de usar o namespace correto

class AuthUserMiddleware extends Middleware
{
    public function __invoke(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // Verificar se o usuário está autenticado
        $authUser = $this->container->get('authUser');
        
        if (!$authUser->checkUser()) {
            // Redirecionar para a página de login
            $routeParser = RouteContext::fromRequest($request)->getRouteParser();
            
            // Cria uma resposta usando o ResponseFactory
            $response = $this->container->get(ResponseFactoryInterface::class)->createResponse();
            
            return $response
                ->withHeader('Location', $routeParser->urlFor('sis.login'))
                ->withStatus(302);
        }

        // Caso o usuário esteja autenticado, prossiga para o próximo middleware ou rota
        $response = $handler->handle($request);
        return $response;
    }
}
