<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="divs"> 
        <div class="productos">
            <div id="crear_productos" class="opcion crear_productos">
                <h2>Agregar Producto</h2>
                <form id="form-producto" >
                    <div class="form_crear_productos">                        
                    <div class="options">
                        <label for="nombre">Nombre Producto:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto" required>
                    </div>
                    <div>
                        <label for="descripcion">Descripcion:</label>
                        <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion del producto" required>
                    </div>
                    <div>
                        <label for="unidades">Unidades existentes:</label>
                        <input type="number" id="unidades" name="unidades" placeholder="Unidades existentes" required>
                    </div>
                    <div>
                        <label for="precio">Precio unitario:</label>
                        <input type="number" id="precio" name="precio" step="0.01" min="0" placeholder="Precio" required>
                    </div>
                    <div>
                        <label for="costo">Costo:</label>
                        <input type="number" id="costo" name="costo" step="0.01" min="0" placeholder="Costo" required>
                    </div>
                    </div>
                    <button type="submit">Crear Producto</button>
            </form>
            </div> 
            <div id="editar_productos" class="opcion modificar_productos">
                <h2>Modificar Producto</h2>
                <form id="form-producto-editar">
                    <div  class="form_modificar">
                        <input type="hidden" id="id" name="id">
                        <div>
                            <label for="nombre_edit">Nombre del producto:</label>
                            <input type="text" id="nombre_edit" name="nombre_edit" placeholder="Nombre del producto" required>
                        </div>
                        <div>
                            <label for="descripcion_edit">Descripción del producto:</label>
                            <input type="text" id="descripcion_edit" name="descripcion_edit" placeholder="Descripción del producto" required>
                        </div>
                        <div>
                            <label for="unidades_edit">Unidades existentes:</label>
                            <input type="number" id="unidades_edit" name="unidades_edit" placeholder="Unidades existentes" required>
                        </div>
                        <div>
                            <label for="precio_edit">Precio unitario:</label>
                            <input type="number" id="precio_edit" name="precio_edit" step="0.01" min="0" placeholder="Precio" required>
                        </div>
                        <div>
                            <label for="costo_edit">Costo:</label>
                            <input type="number" id="costo_edit" name="costo_edit" step="0.01" min="0" placeholder="Costo" required>
                        </div>                        
                    </div>
                    <button type="submit">Modificar Producto</button>
                    <button type="button" id="cancelar_edicion">Cancelar</button>
                </form>
            </div>                       
            <div id="filtrar_productos"  class="opcion ">
                <h2>Filtar productos</h2>
                <form id="filtro-form" >
                    <div class="opcion filtrar">
                        <div>
                            <label for="nombre_p">Nombre Producto:</label>
                            <input type="text" id="nombre_p" name="nombre_p">
                        </div> 
                        <div>
                            <label for="precio_min">Precio Mínimo:</label>
                            <input type="number" id="precio_min" name="precio_min">
                        </div>
                        <div>
                            <label for="precio_max">Precio Máximo:</label>
                            <input type="number" id="precio_max" step="0.01" min="0" name="precio_max">
                        </div>
                        <div>
                            <label for="unidad_min">Unidades Minimas:</label>
                            <input type="number" id="unidad_min" step="0.01" min="0" name="precio_max">
                        </div>
                        <div>
                            <label for="unidad_max">Unidades Máximas:</label>
                            <input type="number" id="unidad_max" step="0.01" min="0" name="precio_max">
                        </div> 
                    </div>
                    <button type="submit">Filtrar</button>
                </form>
            </div>

            <div id="mostrar_productos" class="opcion">
            </div> 
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>

</body>
</html>