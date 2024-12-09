<?php
include 'conexion.php';

$tracto = $_POST['tracto'];
$remolque = $_POST['remolque'];
$operador = $_POST['operador'];
$fecha_salida = $_POST['fecha_salida'];
$fecha_llegada = $_POST['fecha_llegada'];
$cliente = $_POST['cliente'];
$ruta = $_POST['ruta'];

$sql = "INSERT INTO Datos (tracto, remolque, operador, fecha_salida, fecha_llegada, cliente, ruta)
VALUES ('$tracto', '$remolque', '$operador', '$fecha_salida', '$fecha_llegada', '$cliente', '$ruta')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
