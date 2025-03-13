<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface;

class Middleware
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, RequestHandlerInterface $handler): Response
    {

        // Processa a requisição e obtém a resposta do próximo middleware ou do roteamento
        $response = $handler->handle($request);

        // Retorna a resposta sem modificá-la para evitar duplicação
        return $response;
    }
}
