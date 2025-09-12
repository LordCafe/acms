<?php
// Cargar rutas
$routes = require __DIR__ . '/../routes.php';

// Obtener la URL actual
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Buscar en las rutas
if (array_key_exists($uri, $routes)) {
    $handler = $routes[$uri];

    // Si es un callback
    if (is_callable($handler)) {
        $handler();
    } 
    // Si es un controlador
    elseif (is_array($handler)) {
        [$controller, $method] = $handler;

        require_once __DIR__ . "/../app/Controllers/$controller.php";

        $instance = new $controller();
        $instance->$method();
    }
} else {
    // Página 404
    http_response_code(404);
    echo "404 - Página no encontrada 😢";
}
