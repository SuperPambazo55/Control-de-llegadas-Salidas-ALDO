<?php
include 'conexion.php';

$id = $_POST['id'];
$tracto = $_POST['tracto'];
$remolque = $_POST['remolque'];
$operador = $_POST['operador'];
$fecha_salida = $_POST['fecha_salida'];
$fecha_llegada = $_POST['fecha_llegada'];
$cliente = $_POST['cliente'];
$ruta = $_POST['ruta'];

$sql = "UPDATE Datos SET tracto='$tracto', remolque='$remolque', operador='$operador', fecha_salida='$fecha_salida', fecha_llegada='$fecha_llegada', cliente='$cliente', ruta='$ruta' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
