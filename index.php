<?php

// Cargamos el bootstrap de la aplicación
require_once __DIR__ . '/bootstrap/app.php';

// Obtenemos la instancia de la aplicación
$app = new App();

// Manejamos la solicitud y obtenemos la respuesta
$response = $app->handle($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

// Enviamos la respuesta al cliente
$response->send();