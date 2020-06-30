<?php

namespace App\Bootstrap;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$container = $app->getContainer();

$container['view'] = function ($container){
    $view = new \Slim\Views\Twig(__DIR__ . './views', [
        'cache' => false
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,

        $container->request->getUri()
    ));

    return $view;
};