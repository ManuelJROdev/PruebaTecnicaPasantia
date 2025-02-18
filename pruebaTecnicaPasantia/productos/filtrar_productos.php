<?php

include 'funciones.php';  

// Obtener los valores de los filtros
$nombre_p = isset($_POST['nombre_p']) ? $_POST['nombre_p'] : '';
$precio_min = isset($_POST['precio_min']) ? floatval($_POST['precio_min']) : null;
$precio_max = isset($_POST['precio_max']) ? floatval($_POST['precio_max']) : null; 
$unidad_min = isset($_POST['unidad_min']) ? intval($_POST['unidad_min']) : null; 
$unidad_max = isset($_POST['unidad_max']) ? intval($_POST['unidad_max']) : null; 

//Los filtros
$sql = "SELECT * FROM productos WHERE 1=1"; 

if (!empty($nombre_p)) {
    $sql .= " AND Nombre_producto = '" . $nombre_p ."'";
}
 
if ($precio_min !== null && $precio_min>0) {
    $sql .= " AND Precio_unitario >= " . $precio_min;
}

if ($precio_max !== null && $precio_max>0) {
    $sql .= " AND Precio_unitario <= " . $precio_max;
}

if ($unidad_min !== null && $unidad_min>0) {
    $sql .= " AND Unidades_existencia >= " . $unidad_min;
}

if ($unidad_max !== null && $unidad_max>0) {
    $sql .= " AND Unidades_existencia <= " . $unidad_max;
}
  

// Ejecutar la consulta 
$stmt = $connect->query($sql);
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC); 
 

if ($productos) {
    ?>
    <table class="tabla-productos">
        <thead>
            <tr>
                <th>Nombre producto</th>
                <th>Descripcion</th>
                <th>Unidades</th>
                <th>Precio</th>
                <th>Costo</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($productos as $producto) {        
        ?>
        <tr>
            <td><?php echo "{$producto['Nombre_producto']}"; ?></td>
            <td><?php echo "{$producto['Descripcion']}"; ?></td>
            <td><?php echo "{$producto['Unidades_existencia']}"; ?></td>
            <td><?php echo "{$producto['Precio_unitario']}"; ?></td>
            <td><?php echo "{$producto['Costo']}"; ?></td>
            <td><button class='btn-editar' data-id='<?php echo"{$producto['Id']}"; ?>' data-nombre='<?php echo"{$producto['Nombre_producto']}"; ?>'  data-descripcion='<?php echo"{$producto['Descripcion']}"; ?>'  data-unidades='<?php echo"{$producto['Unidades_existencia']}"; ?>' data-precio='<?php echo"{$producto['Precio_unitario']}"; ?>' data-costo='<?php echo"{$producto['Costo']}"; ?>'>Editar</button></td>
            <td><button id="btn_borrar" class='btn_borrar' data-id='<?php echo"{$producto['Id']}"; ?>'>Borrar</button></td>
            </tr>        
        <?php             
            }
        ?>
        </tbody>
    </table>        
    <?php
    
} else {
    echo "No hay productos disponibles.";
}
 
?>