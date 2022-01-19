<?php

include('../Conexion/conexion.php');

$TipoCuadrilla = $_POST["TipoCuadrilla"];
$estado = 'Libre';


$insertar = "INSERT INTO cuadrilla(Tipo_cuadrilla,Estado) 
VALUES ( '$TipoCuadrilla','$estado')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/ConfiguracionEmpleado.php ');
    die;
} else {
    echo $TipoCuadrilla;
}
