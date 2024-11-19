<?php
include_once "connection.php";

// Obtener el id del inmueble desde la solicitud (por ejemplo, a través de un parámetro GET)
$inmuebleId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($inmuebleId > 0) {
    // Consulta para eliminar un inmueble específico
    $stmt = $pdo->prepare("DELETE FROM inmueble WHERE id = :id");
    $stmt->bindParam(':id', $inmuebleId, PDO::PARAM_INT);
    $stmt->execute();

    // Verificar si se eliminó alguna fila
    if ($stmt->rowCount() > 0) {
        $response = ['success' => true, 'message' => 'Inmueble eliminado correctamente'];
    } else {
        $response = ['success' => false, 'message' => 'No se encontró el inmueble con el ID proporcionado'];
    }
} else {
    $response = ['success' => false, 'message' => 'ID de inmueble no válido'];
}

header('Content-Type: application/json');
echo json_encode($response);

// Cerrar la conexión
$pdo = null;
?>