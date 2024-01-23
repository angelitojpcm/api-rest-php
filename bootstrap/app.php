<?php

require_once __DIR__ . '/../core/App.php';
require_once __DIR__ . '/../core/Database.php';

// Crear una nueva instancia de la aplicación
$app = new App;

// Configurar la base de datos
$dbConfig = require __DIR__ . '/../config/database.php';
Database::configure($dbConfig);

// Cargar las rutas
require __DIR__ . '/../routes/web.php';

// Iniciar la aplicación
$app->run();