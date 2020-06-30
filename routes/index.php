<?php

use App\Controllers\{
    ExceptionController,
    UserController
};

use function src\{
    basicAuth,
    slimConfiguration
};

$app = new \Slim\App(slimConfiguration());

//get Container for view
$container = $app->getContainer();

$container['view'] = function ($container){
    $view = new \Slim\Views\Twig('./App/Views', [
        'cache' => false
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    return $view;
};

// ========================
$app->get('/exception-test', ExceptionController::class . ':test');



$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html');

});

$app->group('', function () use ($app) {
    $app->get('/user', UserController::class . ':getUsers');
    $app->post('/user', UserController::class . ':insertUser');
    $app->put('/user', UserController::class . ':updateUser');
    $app->delete('/user', UserController::class . ':deleteUser');
})->add(basicAuth());
// ========================

$app->run();
