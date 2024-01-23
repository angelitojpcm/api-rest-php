<?php
return [
    '/' => [
        'controller' => ['HomeController', 'index'],
        'middleware' => []
    ],
    'admin' => [
        'prefix' => '/admin',
        'middleware' => ['App\\Middlewares\\AuthMiddleware'],
        'routes' => [
            '/example' => [
                'controller' => ['ExampleController', 'show'],
                'middleware' => []
            ],
            // etc.
        ]
    ],
    // etc.
];