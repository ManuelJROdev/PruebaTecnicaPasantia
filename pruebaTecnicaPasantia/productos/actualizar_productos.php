<?php

include 'funciones.php';  

// Recibir los datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre_edit'];
$descripcion = $_POST['descripcion_edit'];
$unidades = $_POST['unidades_edit'];
$precio = $_POST['precio_edit'];
$costo = $_POST['costo_edit'];

$query = "UPDATE productos SET Nombre_producto = ?, Descripcion = ?, Unidades_existencia = ?, Precio_unitario = ?, Costo = ?   WHERE id = ?";
$stmt = $connect->prepare($query);
$stmt->execute([$nombre, $descripcion, $unidades, $precio, $costo, $id]); 
 
?>