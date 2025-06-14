<?php

use App\Middleware\AuthMiddleware;
use Psr\Http\Message\ResponseFactoryInterface;
use Slim\App;


use App\Controllers\AuthController;
use App\Controllers\UserController;
use App\Controllers\DashboardController;
use App\Controllers\ClienteController;
use App\Controllers\PageController;
use App\Controllers\CropperController;
use App\Controllers\ProdutoController;
use App\Controllers\TagsController;
use App\Controllers\NewsletterController;

use Slim\Routing\RouteCollectorProxy;
use Slim\Routing\RouteContext;

return function (App $app) {

    $app->get('/', [PageController::class, 'home'])->setName('home');

    // Rotas Site
    $app->get('/quem-somos', [PageController::class, 'quemSomos'])->setName('quem-somos');
    $app->get('/contato', [PageController::class, 'contato'])->setName('contato');
    $app->post('/contato/enviar', [PageController::class, 'contatoSend'])->setName('contato_send');
    $app->get('/contato/sucesso', [PageController::class, 'contatoSucesso'])->setName('contato_sucesso');
    $app->get('/atendimento-personalizado', [PageController::class, 'atendimento'])->setName('atendimento');
    $app->get('/produtos', [PageController::class, 'produtos'])->setName('produtos');
    $app->get('/produtos/{slug}', [PageController::class, 'produtoDetalhe'])->setName('produtos.detalhe');
    $app->get('/politica-de-privacidade', [PageController::class, 'politicaPrivacidade'])->setName('politica-privacidade');
    
    // Rota Newsletter (AJAX)
    $app->post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->setName('newsletter.subscribe');
    $app->get('/newsletter/popup-html', [NewsletterController::class, 'getPopupHtml'])->setName('newsletter.popup-html');
    
    // Rotas de Produtos (mantidas para compatibilidade)
    // $app->get('/produtos/sacolas-papel', [PageController::class, 'sacolasPapel'])->setName('produtos.sacolas-papel');
    // $app->get('/produtos/sacolas-plastico', [PageController::class, 'sacolasPlastico'])->setName('produtos.sacolas-plastico');
    // $app->get('/produtos/envelopes', [PageController::class, 'envelopes'])->setName('produtos.envelopes');
    // $app->get('/produtos/impressos', [PageController::class, 'impressos'])->setName('produtos.impressos');
    
    // $app->get('/termo-de-uso', [PageController::class, 'termo'])->setName('termo');
    // $app->get('/politica-de-privacidade', [PageController::class, 'politica'])->setName('politica');


    $app->get('/sac', function ($request, $response, $args) {
        $routeParser = RouteContext::fromRequest($request)->getRouteParser();
        $url = $routeParser->urlFor('app.home');
        return $response
            ->withHeader('Location', $url)
            ->withStatus(301);
    });
    
    // ROTA ADMIN
    $app->map(['GET','POST'],'/sac/login', [AuthController::class, 'login'])->Setname('app.login');
    $app->map(['GET','POST'],'/sac/esqueci', [UserController::class, 'esqueci'])->Setname('app.esqueci');
    $app->map(['GET','POST'],'/sac/nova-senha', [UserController::class, 'senhaNova'])->Setname('app.senha');
    
    $app->group('/sac', function (RouteCollectorProxy $group) {

        $group->get('/', [DashboardController::class, 'index'])->setName('app.home');
        
        $group->get('/logout', [AuthController::class, 'logout'])->setName('app.logout');

        $group->get('/alterar-senha', [UserController::class, 'password'])->Setname('app.usuarios.password');
        $group->post('/alterar-senha', [UserController::class, 'passwordUpdate'])->Setname('app.usuarios.passwordUpdate');
        
        $group->get('/cropper/{id}', [CropperController::class, 'cropper'])->setName('app.cropper');
        $group->post('/cropper/update/{id}', [CropperController::class, 'cropperUpdate'])->setName('app.cropperUpdate');

        // Rotas de clientes
        $group->group('/clientes', function (RouteCollectorProxy $group) {
            $group->get('', [ClienteController::class, 'index'])->setName('app.clientes');
            $group->map(['GET', 'POST'], '/add', [ClienteController::class, 'create'])->setName('app.clientes.create');
            $group->get('/del/{id}', [ClienteController::class, 'delete'])->setName('app.clientes.del');
            $group->get('/edit/{id}', [ClienteController::class, 'edit'])->setName('app.clientes.edit');
            $group->post('/edit/{id}', [ClienteController::class, 'update'])->setName('app.clientes.update');
            $group->post('/ajax/order',[ClienteController::class, 'ajaxOrder'])->Setname('app.clientes.ajax.order');
        });

        
        // Rotas de produtos
        $group->group('/produtos', function (RouteCollectorProxy $group) {
            $group->get('', [ProdutoController::class, 'index'])->setName('app.produtos');
            $group->map(['GET', 'POST'], '/add', [ProdutoController::class, 'create'])->setName('app.produtos.create');
            $group->get('/del/{id}', [ProdutoController::class, 'delete'])->setName('app.produtos.del');
            $group->get('/edit/{id}', [ProdutoController::class, 'edit'])->setName('app.produtos.edit');
            $group->post('/edit/{id}', [ProdutoController::class, 'update'])->setName('app.produtos.update');
            $group->post('/ajax/order',[ProdutoController::class, 'ajaxOrder'])->Setname('app.produtos.ajax.order');
        });

        // Rotas de Newsletter
        $group->group('/newsletter', function (RouteCollectorProxy $group) {
            $group->get('', [NewsletterController::class, 'index'])->setName('app.newsletter');
            $group->get('/del/{id}', [NewsletterController::class, 'delete'])->setName('app.newsletter.del');
            $group->get('/export', [NewsletterController::class, 'export'])->setName('app.newsletter.export');
        });

        // Rota de Tags
        $group->map(['GET', 'POST'], '/tags', [TagsController::class, 'edit'])->setName('app.tags');




    })->add(new AuthMiddleware($app->getContainer()));


};
