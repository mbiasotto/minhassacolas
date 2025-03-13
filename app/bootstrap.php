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
    $db_name = 'mareplast';
    $db_user = 'root';
    $db_pass = 'root';
    $app_email  = "mauricio@mbiasotto.com";
    $app_error = true;

    $path = '/mareplast';
}else{
    
    $db_host = 'localhost';
    $db_name = 'elevainvest_app';
    $db_user = 'elevainvest_app';
    $db_pass = 'ANPLEOxx~mnQ)c';

    // $db_host = 'localhost';
    // $db_name = 'trame107_eleva_02';
    // $db_user = 'trame107_eleva';
    // $db_pass = 'CMR&Vx]Wsd0f';

    $app_email  = "mauricio@mbiasotto.com";
    $app_error = true;

    $path = '/app';
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
$container->set('appName', 'Mareplast');
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

    // Adicionando função para o URL completo
    $view->getEnvironment()->addFunction(new \Twig\TwigFunction('full_url', function () use ($basePath) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        return $protocol . $host . $basePath;
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

// Configurar o tratamento de erro 404 personalizado
$errorHandler = $errorMiddleware->getDefaultErrorHandler();
$errorHandler->forceContentType('text/html');

// Registrar configs no container para uso global
$container->set('configs', function () {
    return [
        'pagesLimit' => '20',
    ];
});

// Configurações específicas para páginas de erro que não dependem do banco de dados
$container->set('error_page_configs', function () {
    return [
        'company_name' => 'Mareplast',
        'company_email' => 'contato@mareplast.com.br',
        'company_phone' => '(15) 3223-2417',
        'company_address' => 'Av. Fulvio Claudio Biazzi, 393, Sorocaba - SP'
    ];
});

// Adicionar manipulador específico para HttpNotFoundException
$errorMiddleware->setErrorHandler(\Slim\Exception\HttpNotFoundException::class, function ($request, $exception, $displayErrorDetails, $logErrors, $logErrorDetails) use ($container) {
    $response = $container->get(ResponseFactoryInterface::class)->createResponse(404);
    
    // Criar uma resposta HTML simples sem usar Twig
    $html = '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página não encontrada - Mareplast</title>
    <link rel="icon" type="image/x-icon" href="/mareplast/assets/site/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/mareplast/assets/site/css/main.css">
    <style>
        body { font-family: "Poppins", sans-serif; }
        .error-content { margin: 50px auto; }
        .error-box { background-color: #fff; border-radius: 8px; }
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/mareplast/">
                <img src="/mareplast/assets/site/images/logo.png" alt="Mareplast">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/mareplast/">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="/mareplast/quem-somos">SOBRE NÓS</a></li>
                    <li class="nav-item"><a class="nav-link" href="/mareplast/produtos">PRODUTOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="/mareplast/contato">CONTATO</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/mareplast/">HOME</a></li>
                <li class="breadcrumb-item active">PÁGINA NÃO ENCONTRADA</li>
            </ol>
        </nav>
    </div>

    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center error-content">
                    <div class="error-box p-5 mb-5 shadow-sm rounded">
                        <img src="/mareplast/assets/site/images/404-illustration.svg" alt="Página não encontrada" class="img-fluid mb-4" style="max-width: 250px;">
                        <h2 class="mb-4">Ops! A página que você procura não foi encontrada.</h2>
                        <p class="mb-4">A página que você está tentando acessar pode ter sido movida, excluída ou nunca ter existido. Não se preocupe, você pode:</p>
                        
                        <div class="d-grid gap-3 mb-4">
                            <a href="/mareplast/" class="btn btn-primary btn-lg"><i class="bi bi-house-fill me-2"></i>Voltar para a Página Inicial</a>
                            <a href="/mareplast/produtos" class="btn btn-outline-primary btn-lg"><i class="bi bi-box-seam me-2"></i>Explorar Nossos Produtos</a>
                            <a href="/mareplast/contato" class="btn btn-outline-primary btn-lg"><i class="bi bi-envelope-fill me-2"></i>Entrar em Contato</a>
                        </div>
                    </div>
                    
                    <div class="contact-info p-4 rounded" style="border-top: 1px solid #eee;">
                        <p>Se você acredita que isso é um erro, por favor entre em contato com nossa equipe através do e-mail:</p>
                        <a href="mailto:contato@mareplast.com.br" class="email-link" style="font-size: 1.1rem; color: var(--primary); font-weight: 500;">
                            <i class="bi bi-envelope me-2"></i>contato@mareplast.com.br
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 logo">
                    <img src="/mareplast/assets/site/images/logo-white.png" alt="Logo">
                </div>
                
                <div class="col-lg-3">
                    <h5 class="mb-3">Contato</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-geo-alt me-2"></i>
                            Av. Fulvio Claudio Biazzi, 393, Sorocaba - SP
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-telephone me-2"></i>
                            (15) 3223-2417
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-envelope me-2"></i>
                            contato@mareplast.com.br
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-3 links">
                    <h5 class="mb-3">Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/mareplast/quem-somos" class="text-light text-decoration-none">Sobre Nós</a></li>
                        <li class="mb-2"><a href="/mareplast/produtos" class="text-light text-decoration-none">Produtos</a></li>
                        <li class="mb-2"><a href="/mareplast/contato" class="text-light text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3">
                    <h5 class="mb-3">Redes Sociais</h5>
                    <div class="d-flex gap-3 social">
                        <a href="https://www.facebook.com/mareplast/" target="_fb" rel="nofollow" class="text-light"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="https://www.instagram.com/mareplast/" target="_it" rel="nofollow" class="text-light"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="https://www.linkedin.com/company/mareplast/" target="_lk" rel="nofollow" class="text-light"><i class="bi bi-linkedin fs-5"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="by">
                Todos os direitos reservados<br>
                <a href="https://letsotto.dev/?utm_source=mareplast&utm_medium=footer&utm_campaign=by" target="by"><img src="/mareplast/assets/site/images/logo_otto.png" alt="Otto.dev"></a>
            </div>
        </div>

        <a href="https://wa.me/5515974020934?text=Olá,%20gostaria%20de%20um%20orçamento." target="_blank" class="whatsapp-float">
            <i class="bi bi-whatsapp"></i>
        </a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>';
    
    $response->getBody()->write($html);
    return $response;
});

$errorHandler->setDefaultErrorRenderer('text/html', function ($exception, $request) use ($container) {
    $response = $container->get(ResponseFactoryInterface::class)->createResponse(500);
    
    // Criar uma resposta HTML simples sem usar Twig
    $html = '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro - Mareplast</title>
    <link rel="icon" type="image/x-icon" href="/mareplast/assets/site/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/mareplast/assets/site/css/main.css">
    <style>
        body { font-family: "Poppins", sans-serif; }
        .error-content { margin: 50px auto; }
        .error-box { background-color: #fff; border-radius: 8px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/mareplast/">
                <img src="/mareplast/assets/site/images/logo.png" alt="Mareplast">
            </a>
        </div>
    </nav>

    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center error-content">
                    <div class="error-box p-5 mb-5 shadow-sm rounded">
                        <h2 class="mb-4">Ops! Ocorreu um erro.</h2>
                        <p class="mb-4">Estamos trabalhando para resolver o problema. Por favor, tente novamente mais tarde.</p>
                        
                        <div class="d-grid gap-3 mb-4">
                            <a href="/mareplast/" class="btn btn-primary btn-lg"><i class="bi bi-house-fill me-2"></i>Voltar para a Página Inicial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>';
    
    $response->getBody()->write($html);
    return $response;
});

// Carregar o arquivo de rotas
(require __DIR__ . '/routes.php')($app);

// Executar a aplicação
$app->run();

