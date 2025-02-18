
$(document).ready(function () { 
    cargarProductos();

    // Evento del formulario de creacion
    $("#form-producto").on("submit", function (event) {
        event.preventDefault(); 
        
        var formData = $(this).serialize(); 
        $.ajax({
            type: "POST",
            url: "agregar.php",
            data: formData,
            dataType: "text",
            success: function (response) { 
                $("#form-producto")[0].reset(); 
                cargarProductos(); 
            },
            error: function (xhr, status, error) {
                console.error("Error en la petición AJAX:", error);
            }
        });
    });

    // Función cargar productos
    function cargarProductos() {
        $.ajax({
            url: "mostrar_productos.php",
            type: "GET",
            dataType: "html",
            success: function (data) {
                $("#mostrar_productos").html(data);  
            },
            error: function (xhr, status, error) {
                console.error("Error al cargar productos:", error);
            }
        });
    }

});

document.addEventListener('DOMContentLoaded', function () {
    const div_crear = document.getElementById('crear_productos');
    const div_edit = document.getElementById('editar_productos');
    
    const formularioEdicion = document.getElementById('form-producto-editar');
    const cancelarEdicion = document.getElementById('cancelar_edicion');
    const borrar = document.getElementById('btn_borrar');


    // Delegación de eventos  
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('btn-editar')) { 
            const id = e.target.dataset.id;
            const nombre = e.target.dataset.nombre;
            const descripcion = e.target.dataset.descripcion;
            const unidades = e.target.dataset.unidades;
            const precio = e.target.dataset.precio;
            const costo = e.target.dataset.costo;

            div_crear.style.display = 'none';
            div_edit.style.display = 'block';

            // Cargar los datos del producto en el formulario
            document.getElementById('id').value = id;
            document.getElementById('nombre_edit').value = nombre;
            document.getElementById('descripcion_edit').value = descripcion;
            document.getElementById('unidades_edit').value = unidades;
            document.getElementById('precio_edit').value = precio;
            document.getElementById('costo_edit').value = costo;
        }

        if (e.target.classList.contains('btn_borrar')) {
            const id = e.target.dataset.id; 

            // Confirmar antes de eliminar
            if (confirm('¿Estás seguro de que deseas eliminar este producto?'+id)) { 
                fetch('borrar_productos.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'Id=' + encodeURIComponent(id) 
                })
                .then(response => {
                    if (response.ok) { 
                        e.target.closest('tr').remove();
                        alert('Producto eliminado exitosamente.');
                    } else {
                        alert('Error al eliminar el producto.');
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        }
    });

    //form editar
    formularioEdicion.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(formularioEdicion);

        fetch('actualizar_productos.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => { 
            window.location.reload(); 
        })
        .catch(error => console.error('Error:', error));
    });

    //btn cancelar
    cancelarEdicion.addEventListener('click', function () { 
        div_crear.style.display = 'BLOCK';
        div_edit.style.display = 'NONE';
    }); 

    const filtroForm = document.getElementById('filtro-form');
    const tablaResultados = document.getElementById('mostrar_productos');

    filtroForm.addEventListener('submit', function (e) {
        e.preventDefault(); 

        // Obtener los valores de los campos de filtro
        const nombre_p = document.getElementById('nombre_p').value;
        const precio_min = document.getElementById('precio_min').value;
        const precio_max = document.getElementById('precio_max').value;
        const unidad_max = document.getElementById('unidad_max').value;
        const unidad_min = document.getElementById('unidad_min').value;  

        // Enviar los filtros al servidor mediante ajax
        fetch('filtrar_productos.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `nombre_p=${encodeURIComponent(nombre_p)}&precio_min=${encodeURIComponent(precio_min)}&precio_max=${encodeURIComponent(precio_max)}&unidad_min=${encodeURIComponent(unidad_min)}&unidad_max=${encodeURIComponent(unidad_max)}`
        })
        .then(response => response.text()) 
        .then(data => {
            // Actualizar la tabla con los resultados filtrados
            tablaResultados.innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
    });
});

