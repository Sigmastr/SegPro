<?php

include('../Conexion/conexion.php');

$NombreCliente = $_POST["NombreCliente"];
$RutCliente = $_POST["RutCliente"];
$telefono = $_POST["telefono"];
$Actividad = $_POST["Actividad"];
$pais = $_POST["pais"];
$region = $_POST["region"];
$ciudad = $_POST["ciudad"];
$direccion = $_POST["direccion"];
$PPago = $_POST["PPago"];
$TelefonoCobranza = $_POST["TelefonoCobranza"];
$CorreoPago = $_POST["CorreoPago"];
$DirecPago = $_POST["DirecPago"];
$LineCredit = $_POST["LineCredit"];
$NombreRepresentante = $_POST["NombreRepresentante"];
$CorreoCliente = $_POST["CorreoCliente"];
$EstadoCliente = $_POST["EstadoCliente"];

$TipoCliente = $_POST["TipoCliente"];

$contrato = $_POST["contrato"];

$sql = "UPDATE cliente SET Rut= '$RutCliente', Nombre='$NombreCliente', Email='$CorreoCliente',Telefono='$telefono',Actividad='$Actividad',Pais='$pais',Region='$region',Ciudad='$ciudad',
Direccion='$direccion',PlazoPago='$PPago',EstadoClienteSistema='$EstadoCliente',CorreoPago='$CorreoPago',FonoPago='$TelefonoCobranza',DireccionPagos='$DirecPago',Linea_Credito='$LineCredit',
Representante='$NombreRepresentante',Id_TipoCliente ='$TipoCliente',Id_TipoContrato  ='$contrato' WHERE Rut = '$RutCliente'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/FichaCliente.php');
    die;
}
