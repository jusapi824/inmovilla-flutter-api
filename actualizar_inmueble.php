<?php
include_once "connection.php";

// Obtener los datos del inmueble desde la solicitud POST
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$codigoVivienda = isset($_POST['codigoVivienda']) ? $_POST['codigoVivienda'] : '';
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
$precio = isset($_POST['precio']) ? floatval($_POST['precio']) : 0;
$cantidadCuartos = isset($_POST['cantidadCuartos']) ? intval($_POST['cantidadCuartos']) : 0;
$tieneBaño = isset($_POST['tieneBaño']) ? intval($_POST['tieneBaño']) : 0;
$area = isset($_POST['area']) ? floatval($_POST['area']) : 0;
$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : '';

// Imprimir las variables
echo "ID: $id<br>";
echo "Código Vivienda: $codigoVivienda<br>";
echo "Título: $titulo<br>";
echo "Descripción: $descripcion<br>";
echo "Dirección: $direccion<br>";
echo "Precio: $precio<br>";
echo "Cantidad de Cuartos: $cantidadCuartos<br>";
echo "Tiene Baño: $tieneBaño<br>";
echo "Área: $area<br>";
echo "Imagen: $imagen<br>";

if ($id > 0 && !empty($codigoVivienda) && !empty($titulo) && !empty($descripcion) && !empty($direccion) && $precio > 0 && $cantidadCuartos > 0 && $area > 0) {
    // Consulta para actualizar un inmueble existente
    $stmt = $pdo->prepare("UPDATE inmueble SET codigoVivienda = :codigoVivienda, titulo = :titulo, descripcion = :descripcion, direccion = :direccion, precio = :precio, cantidadCuartos = :cantidadCuartos, tieneBaño = :tieneBaño, area = :area, imagen = :imagen WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':codigoVivienda', $codigoVivienda);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':direccion', $direccion);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':cantidadCuartos', $cantidadCuartos, PDO::PARAM_INT);
    $stmt->bindParam(':tieneBaño', $tieneBaño, PDO::PARAM_INT);
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

// Devolver la respuesta como un objeto JSON
header('Content-Type: application/json');
echo json_encode($response);

// Cerrar la conexión
$pdo = null;
?>