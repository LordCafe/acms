<?php

// Usar autoloader de Composer si existe, sino usar temporal
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
} else {
    require_once __DIR__ . '/../autoload.php';
}

$routes = require __DIR__ . '/../routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$found = false;

foreach ($routes as $route => $handler) {
    // Convertir ruta dinámica a regex
    $pattern = preg_replace('#\{[\w]+\}#', '([\w-]+)', $route);
    $pattern = "#^$pattern$#";

    if (preg_match($pattern, $uri, $matches)) {
        array_shift($matches); // quitar coincidencia completa

        if (is_callable($handler)) {
            call_user_func_array($handler, $matches);
        } elseif (is_array($handler)) {
            [$controller, $method] = $handler;
            $controllerClass = "App\\Controllers\\$controller";
            $instance = new $controllerClass();
            call_user_func_array([$instance, $method], $matches);
        }

        $found = true;
        break;
    }
}

if (!$found) {
    http_response_code(404);
    echo "404 - Página no encontrada 😢";
}
