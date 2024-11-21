<?php
header("Access-Control-Allow-Origin: *"); // Permitir acceso desde cualquier origen
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With"); // Encabezados permitidos
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include_once "connection.php";
// Simple query to fetch data from a table
$query = $pdo->query("SELECT * FROM inmueble");

$results = [];
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $results[] = $row;
    // echo "ID: " . $row['id'] . " - codigoVivienda: " . $row['codigoVivienda'] . " - Título: " . $row['titulo'] . " - Descripción: " . $row['descripcion'] . "<br>";
}

// Return the results as a JSON object

echo json_encode($results);

// Close the connection
$pdo = null;