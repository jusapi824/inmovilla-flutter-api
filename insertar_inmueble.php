<?php
include_once "connection.php";

$codigoVivienda = isset($_POST['codigoVivienda']) ? $_POST['codigoVivienda'] : '';
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
$precio = isset($_POST['precio']) ? floatval($_POST['precio']) : 0;
$cantidadCuartos = isset($_POST['cantidadCuartos']) ? intval($_POST['cantidadCuartos']) : 0;
$tieneBanio = isset($_POST['tieneBanio']) ? intval($_POST['tieneBanio']) : 0;
$area = isset($_POST['area']) ? floatval($_POST['area']) : 0;
$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : '';


if (!empty($codigoVivienda) && !empty($titulo) && !empty($descripcion) && !empty($direccion) && $precio > 0 && $cantidadCuartos > 0 && $area > 0) {
    // Consulta para insertar un nuevo inmueble
    $stmt = $pdo->prepare("INSERT INTO inmueble (codigoVivienda, titulo, descripcion, direccion, precio, cantidadCuartos, tieneBanio, area, imagen) VALUES (:codigoVivienda, :titulo, :descripcion, :direccion, :precio, :cantidadCuartos, :tieneBanio, :area, :imagen)");
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

    // Verificar si se insertó alguna fila
    if ($stmt->rowCount() > 0) {
        $response = ['success' => true, 'message' => 'Inmueble insertado correctamente'];
    } else {
        $response = ['success' => false, 'message' => 'No se pudo insertar el inmueble'];
    }
} else {
    $response = ['success' => false, 'message' => 'Datos del inmueble no válidos'];
}

// Devolver la respuesta como un objeto JSON
header('Content-Type: application/json');
echo json_encode($response);

// Cerrar la conexión
$pdo = null;
?>