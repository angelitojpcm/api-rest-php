# Mi API REST en PHP puro y MySQL

Este proyecto es una simple API REST construida con PHP puro y MySQL. No utiliza ningún framework ni biblioteca externa.

## Estructura del Proyecto

- `index.php`: Punto de entrada de la aplicación.
- `.htaccess`: Configuración para reescribir las URL.
- `config/database.php`: Configuración de la base de datos.
- `controllers/ExampleController.php`: Controlador de ejemplo.
- `models/ExampleModel.php`: Modelo de ejemplo.
- `core/App.php`: Clase principal de la aplicación.
- `core/Database.php`: Clase para interactuar con la base de datos.
- `bootstrap/app.php`: Inicio de la aplicación y configuración de rutas.
- `storage/logs`: Directorio para almacenar archivos de registro.
- `routes/web.php`: Definición de rutas.

## Instalación

1. Clonar el repositorio.
2. Crear una base de datos MySQL y configurarla en `config/database.php`.
3. Ejecutar el servidor PHP en la raíz del proyecto.

## Uso

Para utilizar la API, hacer solicitudes HTTP a las rutas definidas en `routes/web.php`.
```

Por favor, ten en cuenta que este es un ejemplo básico y puede necesitar ajustes según tus necesidades específicas.