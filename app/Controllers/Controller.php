<?php

namespace App\Controllers;

use Psr\Http\Message\UploadedFileInterface;
use Slim\Routing\RouteContext;

use App\Models\Tag;
use App\Models\Produto;

use Psr\Container\ContainerInterface;

class Controller
{
    protected $container;
    protected $tags;
    protected $produtos;
    protected $configs;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        $this->tags = Tag::find(1);
        $this->produtos = Produto::with(['imagens' => function($query) {
            $query->orderBy('ordem', 'ASC');
        }])->where('status', 1)->orderBy('ordem', 'ASC')->get()->map(function($produto) {
            $produto->imagem = $produto->imagens->first();
            return $produto;
        });

        $this->configs = array(
                            'tags' => $this->tags,
                            'produtos' => $this->produtos,
                            'pagesLimit' => '20',
                            );
                            
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

