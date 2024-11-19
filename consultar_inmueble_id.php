<?php
include_once "connection.php";

// Obtener el id del inmueble desde la solicitud (por ejemplo, a través de un parámetro GET)
$inmuebleId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($inmuebleId > 0) {
    // Consulta para obtener un inmueble específico
    $stmt = $pdo->prepare("SELECT * FROM inmueble WHERE id = :id");
    $stmt->bindParam(':id', $inmuebleId, PDO::PARAM_INT);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Devolver los resultados como un objeto JSON
    header('Content-Type: application/json');
    echo json_encode($results);
} else {
    // Devolver un error si no se proporciona un id válido
    header('Content-Type: application/json');
    echo json_encode(['error' => 'ID de inmueble no válido']);
}

// Cerrar la conexión
$pdo = null;
?>