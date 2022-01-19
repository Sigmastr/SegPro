<?php

include('../Conexion/conexion.php');

$NombreEmpleado = $_POST["NombreEmpleado"];
$RutEmpleado = $_POST["RutEmpleado"];
$telefono = $_POST["telefono"];
$Email = $_POST["Email"];
$Cuadrilla = $_POST["Cuadrilla"];
$Cargo = $_POST["cargo"];
$caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$longpalabra = 8;
for ($pass = '', $n = strlen($caracteres) - 1; strlen($pass) < $longpalabra;) {
    $x = rand(0, $n);
    $pass .= $caracteres[$x];
}
password_hash($pass, PASSWORD_DEFAULT);
echo $pass;


$insertar = "INSERT INTO empleado(Rut_Empleado,Nombre,contrasena,Email,id_cargo,id_cuadrilla,Telefono) 
VALUES ( '$RutEmpleado',$NombreEmpleado','$pass','$Email','$Cargo','$Cuadrilla','$telefono')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/ConfiguracionEmpleado.php ');
    die;
} else {
    echo $EstadoCliente;
}
