<?php

namespace App\Core;

class Path {
    private static $paths = null;
    
    private static function initPaths(): void {
        if (self::$paths !== null) return;
        
        $configPath = __DIR__ . '/../../config/paths.json';
        if (file_exists($configPath)) {
            self::$paths = json_decode(file_get_contents($configPath), true);
        } else {
            // Fallback por defecto
            self::$paths = [
                'data' => 'data/',
                'config' => 'config/',
                'storage' => 'storage/',
                'views' => 'app/Views/',
            ];
        }
    }
    
    public static function root(): string {
        self::initPaths();
        return realpath(__DIR__ . '/../../') . '/';
    }
    
    public static function data(string $file = ''): string {
        self::initPaths();
        return self::root() . self::$paths['data'] . $file;
    }
    
    public static function config(string $file = ''): string {
        self::initPaths();
        return self::root() . self::$paths['config'] . $file;
    }
    
    public static function storage(string $file = ''): string {
        self::initPaths();
        return self::root() . self::$paths['storage'] . $file;
    }
    
    public static function views(string $file = ''): string {
        self::initPaths();
        return self::root() . self::$paths['views'] . $file;
    }
}