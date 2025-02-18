<?php
include 'funciones.php';

$stmt = $connect->query("SELECT * FROM productos ORDER BY id DESC");
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
