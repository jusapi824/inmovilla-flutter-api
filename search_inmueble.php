<?php
include_once "connection.php";

$inmuebleId = isset($_GET['id']) ? intval($_GET['id']) : 0;
// Simple query to fetch data from a table
$query = $pdo->query("SELECT * FROM inmueble WHERE ");

$results = [];
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $results[] = $row;
}

// Return the results as a JSON object
header('Content-Type: application/json');
echo json_encode($results);

// Close the connection
$pdo = null;