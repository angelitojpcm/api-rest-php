<?php

require_once '../controllers/ExampleController.php';

$app->get('/', ['ExampleController', 'index']);
$app->get('/example', ['ExampleController', 'show']);
$app->post('/example', ['ExampleController', 'store']);
$app->put('/example/{id}', ['ExampleController', 'update']);
$app->delete('/example/{id}', ['ExampleController', 'delete']);