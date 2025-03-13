<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Routing\RouteContext;
use Psr\Http\Message\ResponseFactoryInterface;

class AuthMiddleware extends Middleware
{
    public function __invoke(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // Verificar se o usuário está autenticado
        $auth = $this->container->get('auth');
        
        if (!$auth->check()) {
            // Redirecionar para a página de login
            $routeParser = RouteContext::fromRequest($request)->getRouteParser();
            
            // Cria uma resposta usando o ResponseFactory
            $response = $this->container->get(ResponseFactoryInterface::class)->createResponse();
            
            return $response
                ->withHeader('Location', $routeParser->urlFor('app.login'))
                ->withStatus(302);
        }

        // Caso o usuário esteja autenticado, prossiga para o próximo middleware ou rota
        $response = $handler->handle($request);
        return $response;
    }
}
