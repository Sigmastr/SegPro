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

$insertar = "INSERT INTO cliente(Rut,Nombre,Email,Telefono,Actividad,Pais,Region,Ciudad,Direccion,
PlazoPago,EstadoClienteSistema ,CorreoPago,FonoPago,DireccionPagos,Linea_Credito,
Representante,Id_TipoCliente ,Id_TipoContrato) VALUES ('$RutCliente','$NombreCliente','$CorreoCliente','$telefono','$Actividad','$pais',
'$region','$ciudad','$direccion','$PPago','$EstadoCliente','$CorreoPago','$TelefonoCobranza','$DirecPago','$LineCredit','$NombreRepresentante',
'$TipoCliente','$contrato')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/FichaCliente.php');
    die;
} else {
    echo 'error';
}
