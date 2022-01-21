<?php

include('../Conexion/conexion.php');

$NombreBodega = $_POST["NombreBodega"];
$direccion = $_POST["direccion"];
$Correo = $_POST["Correo"];
$region = $_POST["region"];
$ciudad = $_POST["ciudad"];
$encargado = $_POST["encargado"];

$sql1 = mysqli_query($conn, "SELECT * FROM bodega WHERE Nombre_Bodega='$NombreBodega' OR Email='$Correo' OR Direccion='$direccion' ");


$valores = mysqli_fetch_row($sql1);
$rpta = $valores[0];

$sql = "UPDATE bodega SET Nombre_Bodega='$NombreBodega',Email='$Correo',Direccion='$direccion',id_Region='$region',Comuna_id='$ciudad',
Rut_Encargado='$encargado' WHERE Codigo_bodega='$rpta'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Bodega/Bodega.php');
    die;
} else {
    echo    'no';
}
