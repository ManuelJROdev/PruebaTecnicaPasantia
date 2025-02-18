<?php
include 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $unidades = $_POST["unidades"];
    $precio = $_POST["precio"];
    $costo = $_POST["costo"];

    if (!empty($nombre) && !empty($precio)) {
        $stmt = $connect->prepare("INSERT INTO productos (Nombre_producto,Descripcion,Unidades_existencia,Precio_unitario,Costo) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nombre, $descripcion, $unidades, $precio, $costo]);
        echo "Producto agregado correctamente";
    } else {
        echo "Todos los campos son obligatorios";
    }
        
    $stmt->close();
    $connect->close();
}
?>
