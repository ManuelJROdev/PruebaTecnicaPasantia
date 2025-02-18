<?php
include '../bdconfig.php'; 

function obtenerProductos() {
    global $connect; 

    $sql = "SELECT * FROM productos";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC); 
}

?>
