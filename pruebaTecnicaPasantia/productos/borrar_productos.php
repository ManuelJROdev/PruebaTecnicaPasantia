<?php 
include 'funciones.php';  

// Obtener el ID del producto desde la solicitud POST
$id = isset($_POST['Id']) ? intval($_POST['Id']) : 0;
echo $id;

if ($id > 0) { 
    $sql = "DELETE FROM productos WHERE Id = ?";
    $stmt = $connect->prepare($sql);  

    if ($stmt) { 
        if ($stmt->execute([$id])) { 
            exit;
        } else {
            die("Error al ejecutar la consulta: " . $stmt->error);
        }

        $stmt->close();
    } else {
        die("Error al preparar la consulta: " . $conn->error);
    }
} else {
    die("ID inválido");
}

$connect->close();
?>