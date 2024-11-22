<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php'; 
use Dotenv\Dotenv;

// Cargar variables de entorno desde el archivo .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Obtener el entorno actual
$appEnv = $_ENV['APP_ENV'] ?: 'local';

// Configuración según el entorno
$config = [
    'app_env' => $appEnv,
    'app_debug' => $_ENV['APP_DEBUG'] === 'true',
    'db' => [
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'],
        'database' => $_ENV['DB_DATABASE'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
];

return $config;