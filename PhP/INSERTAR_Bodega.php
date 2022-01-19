<?php

include('../Conexion/conexion.php');

$NombreBodega = $_POST["NombreBodega"];
$direccion = $_POST["direccion"];
$Correo = $_POST["Correo"];
$region = $_POST["region"];
$ciudad = $_POST["ciudad"];
$encargado = $_POST["encargado"];



$insertar = "INSERT INTO bodega(Nombre_Bodega,Email,Direccion,id_Region,Comuna_id,Rut_Encargado ) 
VALUES ( '$NombreBodega','$Correo','$direccion','$region','$ciudad','$encargado')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Bodega/Bodega.php');
    die;
}
