<?php


use function src\slimConfiguration;
use function src\basicAuth;
use App\Controllers\{
    UserController,
    ExceptionController
};
$app = new \Slim\App(slimConfiguration());

// ========================
$app->get('/exception-test', ExceptionController::class . ':test');

$app->group('',function() use ($app){
    $app->get('/user', UserController:: class . ':getUsers');
    $app->post('/user', UserController:: class . ':insertUser');
    $app->put('/user', UserController:: class . ':updateUser');
    $app->delete('/user', UserController:: class . ':deleteUser');
})->add(basicAuth());
// ========================

$app->run();
