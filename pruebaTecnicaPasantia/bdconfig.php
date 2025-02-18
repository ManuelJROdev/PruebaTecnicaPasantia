<?php
$host = 'localhost'; 
$dbname = 'prueba_tecnica_pasantia';
$user = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $connect = $pdo = new PDO($dsn, $user, $password, $options);  
}catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
} 

?>