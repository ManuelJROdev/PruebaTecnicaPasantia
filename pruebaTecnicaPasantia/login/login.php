<?php
header('Content-Type: application/json');
require_once '../bdconfig.php'; 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $username = $_POST['user'];
    $password = $_POST['password'];
    $tabla = 'usuarios'; 
     
    $stmt = $connect->prepare("SELECT * FROM $tabla WHERE Nombre = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) { 
        if ($password === $user['Contra']) {  
            header('Location: http://localhost/pruebaTecnicaPasantia/productos/productos.php');
        } else {  
            header('Location: http://localhost/pruebaTecnicaPasantia/login/index.html');
        }
    } else { 
        echo json_encode(["error" => "Usuario no encontrado"]);
    }

} else {
    echo json_encode(["error" => "Método de solicitud no permitido"]);
}
?>
