<?php
$servername = "127.0.0.1@3306";
$username = "root";
$password = "123456";
$dbname = "ControlDeLlegadasSalidas";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
