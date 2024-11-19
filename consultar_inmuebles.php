<?php
include_once "config.php";
// Simple query to fetch data from a table
$query = $pdo->query("SELECT * FROM inmueble");

$results = [];
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $results[] = $row;
    // echo "ID: " . $row['id'] . " - codigoVivienda: " . $row['codigoVivienda'] . " - Título: " . $row['titulo'] . " - Descripción: " . $row['descripcion'] . "<br>";
}

// Return the results as a JSON object
header('Content-Type: application/json');
echo json_encode($results);

// Close the connection
$pdo = null;