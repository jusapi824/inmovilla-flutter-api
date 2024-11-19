<?php

$config = require 'config.php';

// if ($config['app_env'] === 'local') {
//     echo "Entorno local.\n";
// } else {
//     echo "Entorno de producción.\n";
// }

$bd = $config['db']['database'];
$server = $config['db']['host'];
$dsn = "mysql:host=$server;dbname=$bd";
$user = $config['db']['username'];
$password = $config['db']['password']; 

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
