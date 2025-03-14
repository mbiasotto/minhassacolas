<?php

namespace App\Controllers;

use Psr\Http\Message\UploadedFileInterface;
use Slim\Routing\RouteContext;

use Psr\Container\ContainerInterface;

class Controller
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;                        
    }

    public function redirect($request, $response, $routeName, array $routeParams = [])
    {
        $routeParser = RouteContext::fromRequest($request)->getRouteParser();
        $url = $routeParser->urlFor($routeName, $routeParams);
        return $response->withHeader('Location', $url)->withStatus(302);
    }


    /**
     * Move um arquivo carregado para o diretório de destino
     * 
     * @param string $directory O diretório onde o arquivo será salvo
     * @param UploadedFileInterface $uploadedFile O arquivo carregado
     * @return string O nome do arquivo salvo
     */
    protected function moveUploadFile($directory, UploadedFileInterface $uploadedFile)
    {
        // Obtém a extensão do arquivo
        $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
        
        // Gera um nome de arquivo único
        $basename = bin2hex(random_bytes(8));
        $filename = sprintf('%s.%0.8s', $basename, $extension);

        // Move o arquivo para o diretório de destino
        $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);

        return $filename;
    }
}

