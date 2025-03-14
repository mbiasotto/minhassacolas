<?php

namespace App\Services;

use App\Models\Tag;
use App\Models\Produto;
use Psr\Container\ContainerInterface;

class ConfigService
{
    protected $container;
    
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function loadGlobalConfigs()
    {
        // Load tags
        $tags = Tag::find(1);
        
        // Load produtos with images
        $produtos = Produto::with(['imagens' => function($query) {
            $query->orderBy('ordem', 'ASC');
        }])->where('status', 1)->orderBy('ordem', 'ASC')->get()->map(function($produto) {
            $produto->imagem = $produto->imagens->first();
            return $produto;
        });
        
        // Create configs array
        $configs = array(
            'tags' => $tags,
            'produtos' => $produtos,
            'pagesLimit' => '20',
        );
        
        // Set configs in container for global access
        $this->container->set('configs', $configs);
        
        return $configs;
    }
}