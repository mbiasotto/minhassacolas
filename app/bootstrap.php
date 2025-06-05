<?php

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

use DI\ContainerBuilder;
use Illuminate\Database\Capsule\Manager as Capsule;
use Slim\Flash\Messages;
use Slim\Psr7\Factory\ResponseFactory;
use Psr\Http\Message\ResponseFactoryInterface;

use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;


session_start();
date_default_timezone_set('America/Sao_Paulo');

require __DIR__ . '/../vendor/autoload.php';

if ((strrpos(strtolower($_SERVER['SERVER_NAME']), "localhost") !== false)){   
    $db_host = 'localhost';
    $db_name = 'minhassacolas';
    $db_user = 'root';
    $db_pass = 'root';
    $app_email  = "mauricio@mbiasotto.com";
    $app_error = true;

    $path = '/minhassacolas';
}else{
    
    $db_host = 'localhost';
    $db_name = 'mareplas_site2025';
    $db_user = 'mareplas_site2025';
    $db_pass = '7wHp82Ud6R$';

    $app_email  = "contato@minhassacolas.com.br";
    $app_error = false;

    $path = '';
}

// Criação do container com PHP-DI usando ContainerBuilder para autowiring
$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(true);
$container = $containerBuilder->build();

// Registre o ResponseFactory no container
$responseFactory = new ResponseFactory();
AppFactory::setContainer($container);
AppFactory::setResponseFactory($responseFactory);
$app = AppFactory::create($responseFactory);

// Definir base path (caso esteja usando um subdiretório)
$app->setBasePath($path);

// Configurações do banco de dados e Eloquent ORM
$container->set('settings', function () use ($db_host, $db_name, $db_user, $db_pass, $app_error) {
    return [
        'displayErrorDetails' => $app_error,
        'db' => [
            'driver' => 'mysql',
            'host' => $db_host,
            'database' => $db_name,
            'username' => $db_user,
            'password' => $db_pass,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ],
    ];
});

//DADOS PADRÕES DO PROJETO
$container->set('appName', 'Minhas Sacolas');
$container->set('appEmail', $app_email);
$container->set('upload_directory', __DIR__ . '/../assets/uploads');

// Configuração do Eloquent
$capsule = new Capsule;
$capsule->addConnection($container->get('settings')['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Configuração do DB no container
$container->set('db', function () use ($capsule) {
    return $capsule;
});

// Registrar o ConfigService no container
$container->set('configService', function ($container) {
    return new \App\Services\ConfigService($container);
});

// Inicializar configurações globais
$container->get('configService')->loadGlobalConfigs();

// Configuração do Flash Messages
$container->set('flash', function () {
    return new Messages();
});

// Registrar o serviço de e-mail (App\Mail) no container
$container->set('mail', function ($container) {
    return new \App\Mail($container);
});

$container->set('validator', function () {
    return new \App\Validation\Validator();
});


// Autenticação e outras dependências
$container->set('authUser', function ($container) {
    return new \App\Auth\AuthUser($container);
});

$container->set('auth', function ($container) {
    return new \App\Auth\Auth($container);
});

$container->set(ResponseFactoryInterface::class, function () {
    return new ResponseFactory();
});

// Configuração do Twig para views
$container->set('view', function () use ($container, $app) {
    $view = Twig::create(__DIR__ . '/../views', ['cache' => false]);

    // Adicionando o base path como variável global
    $basePath = $app->getBasePath();
    $view->getEnvironment()->addGlobal('base_path', $basePath);

    if ($container->has('configs')) {
        $view->getEnvironment()->addGlobal('configs', $container->get('configs'));
    }

    // Adicionando função para o URL completo
    $view->getEnvironment()->addFunction(new \Twig\TwigFunction('full_url', function () use ($basePath) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        return $protocol . $host . $basePath;
    }));
    
    // Adicionando função path_for para gerar URLs para rotas nomeadas
    $view->getEnvironment()->addFunction(new \Twig\TwigFunction('path_for', function ($routeName, $data = [], $queryParams = []) use ($app) {
        $routeParser = $app->getRouteCollector()->getRouteParser();
        return $routeParser->urlFor($routeName, $data, $queryParams);
    }));
    
    // Adicionando função url_for como alias de path_for para compatibilidade
    $view->getEnvironment()->addFunction(new \Twig\TwigFunction('url_for', function ($routeName, $data = [], $queryParams = []) use ($app) {
        $routeParser = $app->getRouteCollector()->getRouteParser();
        return $routeParser->urlFor($routeName, $data, $queryParams);
    }));

    // Adicionando variáveis globais ao Twig
    $view->getEnvironment()->addGlobal('auth', [
        'check' => $container->get('auth')->check(),
        'user' => $container->get('auth')->user(),
        'checkUser' => $container->get('authUser')->checkUser(),
    ]);

    $view->getEnvironment()->addGlobal('flash', $container->get('flash'));

    return $view;
});


// Adicionar o middleware de Twig
$app->add(TwigMiddleware::createFromContainer($app, 'view'));

// Middleware de roteamento e tratamento de erros
$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware($app_error, true, true);

// Configurar o manipulador de erro personalizado para 404
$errorMiddleware->setErrorHandler(
    Slim\Exception\HttpNotFoundException::class,
    function (\Psr\Http\Message\ServerRequestInterface $request, \Throwable $exception, bool $displayErrorDetails) use ($app, $container) {
        $response = $app->getResponseFactory()->createResponse(404);
        
        // Adicionar o TwigRuntimeLoader manualmente para o request de 404
        $routeParser = $app->getRouteCollector()->getRouteParser();
        $basePath = $app->getBasePath();
        $runtimeLoader = new \Slim\Views\TwigRuntimeLoader($routeParser, $request->getUri(), $basePath);
        $container->get('view')->getEnvironment()->addRuntimeLoader($runtimeLoader);
        
        // Verificar se configs existe no container e passar para a view
        $view = $container->get('view');
        if ($container->has('configs')) {
            $view->getEnvironment()->addGlobal('configs', $container->get('configs'));
        }
        
        return $view->render($response, 'site/404.twig');
    }
);

// Carregar o arquivo de rotas
(require __DIR__ . '/routes.php')($app);

// Executar a aplicação
$app->run();