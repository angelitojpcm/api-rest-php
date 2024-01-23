<?php

use Core\App;
use Core\Database;
use Core\Http;

require_once __DIR__ . '/../core/App.php';
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../core/http.php'; // Asegúrate de que este archivo se está cargando

// Crear una nueva instancia de la aplicación
$app = new App;

// Configurar la base de datos
Database::configure($dbConfig);

// Cargar las rutas
require __DIR__ . '/../routes/web.php';

// Iniciar la aplicación
$app->run();