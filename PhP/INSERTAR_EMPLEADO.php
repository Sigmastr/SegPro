<?php
include('../Conexion/conexion.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


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
$pass2 = $pass;
$pass = password_hash($pass, PASSWORD_DEFAULT);



$insertar = "INSERT INTO empleado(Rut_Empleado,Nombre,contrasena,Email,id_cargo,id_cuadrilla,Telefono) 
VALUES ( '$RutEmpleado','$NombreEmpleado','$pass','$Email','$Cargo','$Cuadrilla','$telefono')";

$resultado = mysqli_query($conn, $insertar);
//crear el envío por mail de la cuenta y la pass
if ($resultado) {
    $header = 'From:' . $Email . "\r\n";
    $header = "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header = "Mime-Version: 1.0 \r\n";
    $header = "Content-Type: text/plain";

    $message = "¡Bienvenido a la plataforma de gestión de SegProject!" . "\r\n";
    $message .= "Para acceder a la plataforma debe utilizar su correo: " . $Email .  "\r\n";
    $message .= "Su contraseña es:" . $pass2 . "\r\n";
    $message .= "No olvide cambiar su contraseña al ingresar a la plataforma";

    $para = $Email;
    $matter = 'Registro en Software de gestión SegProject';
    mail($para, $matter, utf8_decode($message), $header);


    // echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/ConfiguracionEmpleado.php ');
    die;
} else {
}
