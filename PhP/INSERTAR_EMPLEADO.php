<?php

include('../Conexion/conexion.php');

$NombreEmpleado = $_POST["NombreEmpleado"];
$RutEmpleado = $_POST["RutEmpleado"];
$telefono = $_POST["telefono"];
$Email = $_POST["Email"];
$NombreEmpleado = $_POST["Cuadrilla"];
$NombreEmpleado = $_POST["cargo"];

password_hash("rasmuslerdorf", PASSWORD_DEFAULT);


$insertar = "INSERT INTO empleado(Rut_Empleado,Nombre,contrasena,Email,id_cargo,id_cuadrilla,Telefono) 
VALUES ( '$EstadoCliente')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/MenuAdministrador/administrador.php ');
    die;
} else {
    echo $EstadoCliente;
}
