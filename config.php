<?php

$bd = "inmovilla_flutter";
$server = "localhost";//46.202.92.226
$dsn = "mysql:host=$server;dbname=$bd";
$user = 'root'; //mysql
$password = ''; // "ee19d655f1934da88398"

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}


?>
