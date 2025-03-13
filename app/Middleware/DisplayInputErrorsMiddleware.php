<?php

namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Psr\Http\Message\ResponseInterface as Response;

class DisplayInputErrorsMiddleware
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        // Adiciona erros globais à view se existirem na sessão
        if (isset($_SESSION['errors'])) {
            $this->container->view->getEnvironment()->addGlobal('errors', $_SESSION['errors']);
        }

        // Remove os erros da sessão após serem exibidos
        unset($_SESSION['errors']);

        // Passa a requisição para o próximo middleware/handler
        $response = $handler->handle($request);

        return $response;
    }
}
