<?php

$con = mysqli_connect("localhost", "root", "123456", "proyectoPrueba");
// Check connection
if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


// escape variables for security
$codigo = mysqli_real_escape_string($con, $_POST['eventoCodigo']);
$descripcion = mysqli_real_escape_string($con, $_POST['descripcion']);
$lugar = mysqli_real_escape_string($con, $_POST['lugar']);
$fecha = mysqli_real_escape_string($con, $_POST['fechaEvento']);
$fechaVenta = mysqli_real_escape_string($con, $_POST['fechaVenta']);

$sql = "INSERT INTO evento (codigo, descripcion, lugar, fecha, fechaVenta)
VALUES ('$codigo', '$descripcion', '$lugar','$fecha','$fechaVenta')";

if (!mysqli_query($con, $sql)) {
   die('Error: ' . mysqli_error($con));
} else {
   echo "Se ha guardado";
}
mysqli_close($con);
?>