<?php

namespace src;

function slimConfiguration(): \Slim\Container
{
    // Detalhes do erro Slim
    $configuration = [
        'settings' => [
            'displayErrorDetails' => getenv('DISPLAY_ERROS_DETAILS'),
        ],
    ];

    return new \Slim\Container($configuration);
}
