<?php
$servidor = "localhost";
$usuario = "opadilla";
$clave = "opadilla1";
$base = "maquillaje";

// Crear Conexion
$conexion = mysqli_connect($servidor, $usuario, $clave, $base);
// Check connection
//die("OSWALDO LA CONEXION NO EXISTE: " . mysqli_connect_error());
if ($conexion) {
    
}
mysqli_close($con);
?>
 