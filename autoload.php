<?php
/**
 * Autoloader temporal para ACMS
 * Usar hasta instalar Composer
 */

spl_autoload_register(function ($class) {
    // Convertir namespace a ruta de archivo
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/app/';
    
    // Verificar si la clase usa nuestro namespace
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    
    // Obtener el nombre relativo de la clase
    $relativeClass = substr($class, $len);
    
    // Reemplazar separadores de namespace con separadores de directorio
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
    
    // Si el archivo existe, incluirlo
    if (file_exists($file)) {
        require $file;
    }
});