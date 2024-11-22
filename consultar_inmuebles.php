<?php
include_once "cors.php";
include_once "connection.php";
// Simple query to fetch data from a table
$query = $pdo->query("SELECT * FROM inmueble ORDER BY id DESC");

$results = [];
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $results[] = $row;
    // echo "ID: " . $row['id'] . " - codigoVivienda: " . $row['codigoVivienda'] . " - Título: " . $row['titulo'] . " - Descripción: " . $row['descripcion'] . "<br>";
}

// Return the results as a JSON object

echo json_encode($results);

// Close the connection
$pdo = null;