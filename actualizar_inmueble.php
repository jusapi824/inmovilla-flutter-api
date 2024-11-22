<?php
include_once "cors.php";
include_once "connection.php";

try {
    // Obtener los datos del inmueble desde la solicitud POST
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $codigoVivienda = isset($_POST['codigoVivienda']) ? $_POST['codigoVivienda'] : '';
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
    $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
    $precio = isset($_POST['precio']) ? floatval($_POST['precio']) : 0;
    $cantidadCuartos = isset($_POST['cantidadCuartos']) ? intval($_POST['cantidadCuartos']) : 0;
    $tieneBanio = isset($_POST['tieneBanio']) ? intval($_POST['tieneBanio']) : 0;
    $area = isset($_POST['area']) ? floatval($_POST['area']) : 0;
    $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : '';


    // if ($id > 0 && !empty($codigoVivienda) && !empty($titulo) && !empty($descripcion) && !empty($direccion) && $precio > 0 && $cantidadCuartos > 0 && $area > 0) {
    if ($id > 0) {
        // Consulta para actualizar un inmueble existente
        $stmt = $pdo->prepare("UPDATE inmueble SET codigoVivienda = :codigoVivienda, titulo = :titulo, descripcion = :descripcion, direccion = :direccion, precio = :precio, cantidadCuartos = :cantidadCuartos, tieneBanio = :tieneBanio, area = :area, imagen = :imagen WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':codigoVivienda', $codigoVivienda);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':cantidadCuartos', $cantidadCuartos, PDO::PARAM_INT);
        $stmt->bindParam(':tieneBanio', $tieneBanio, PDO::PARAM_INT);
        $stmt->bindParam(':area', $area);
        $stmt->bindParam(':imagen', $imagen);
        $stmt->execute();

        // Verificar si se actualizó alguna fila
        if ($stmt->rowCount() > 0) {
            $response = ['success' => true, 'message' => 'Inmueble actualizado correctamente'];
        } else {
            $response = ['success' => false, 'message' => 'No se pudo actualizar el inmueble o no hubo cambios'];
        }
    } else {
        $response = ['success' => false, 'message' => 'Datos del inmueble no válidos'];
    }
} catch (PDOException $e) {
    $response = ['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()];
} catch (Exception $e) {
    $response = ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
}
// Devolver la respuesta como un objeto JSON
header('Content-Type: application/json');
echo json_encode($response);

// Cerrar la conexión
$pdo = null;
