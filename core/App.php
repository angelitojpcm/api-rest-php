<?php

namespace Core;

class App
{
    protected $controller;
    protected $method;
    protected $params;
    protected $request;
    protected $http;
    public function __construct()
    {
        $this->http = new http;
        if ($this->http->isLocal()) {
            $baseUrl = 'http://localhost/facturacion/api-rest/';
        } else {
            $baseUrl = 'http://tudominio.com/';
        }

        $url = $this->parseUrl($baseUrl);
        $routes = require 'routes/web.php';
        if ($url !== null) {
            foreach ($routes as $route => $data) {
                if (isset($data['prefix'])) {
                    $prefix = ltrim($data['prefix'], '/');
                    if (strpos($url[0], $prefix) === 0) {
                        // Aquí necesitamos ajustar la URL para quitar el prefijo
                        $urlWithoutPrefix = str_replace($prefix, '', $url[0]);
                        $this->handleGroup($data, $urlWithoutPrefix);
                    }
                } else if ($route === $url[0]) {
                    $this->handleRoute($data);
                }
            }
        }
        if ($this->controller !== null) {
            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            $this->params = $url ? array_values($url) : [];
            call_user_func_array([$this->controller, $this->method], $this->params);
        } else {
            // Manejar el caso en que no se encontró ninguna ruta
            die('No se encontró la ruta solicitada.');
        }
    }
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
    public function handleMiddlewares($middlewares)
    {
        foreach ($middlewares as $middleware) {
            $middlewareInstance = new $middleware;
            $middlewareInstance->handle($this->request, function ($request) {
                return $request;
            });
        }
    }
    public function handleRoute($data)
    {
        $this->controller = $data['controller'][0];
        $this->method = $data['controller'][1];
        $middlewares = $data['middleware'];
        $this->handleMiddlewares($middlewares);
    }
    public function handleGroup($group, $url)
    {
        $this->handleMiddlewares($group['middleware']);
        if (isset($group['routes'][$url])) {
            $this->handleRoute($group['routes'][$url]);
        }
    }
}
