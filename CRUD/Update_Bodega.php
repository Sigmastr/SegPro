<?php

include('../Conexion/conexion.php');

$NombreBodega = $_POST["NombreBodega"];
$direccion = $_POST["direccion"];
$Correo = $_POST["Correo"];
$region = $_POST["region"];
$ciudad = $_POST["ciudad"];
$encargado = $_POST["encargado"];

$sql1 = mysqli_query($conn, "SELECT Codigo_bodega FROM bodega WHERE Nombre_Bodega='$NombreBodega'AND Email='$Correo' AND Direccion='$direccion'");
$resultado = mysqli_fetch_row($sql1);

$sql = "UPDATE bodega SET Nombre_Bodega='$NombreBodega',Email='$Correo',Direccion='$direccion',id_Region='$region',Comuna_id='$ciudad',
Rut_Encargado='$encargado' WHERE Codigo_bodega ='$resultado[0]'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Bodega/Bodega.php');
    die;
}
