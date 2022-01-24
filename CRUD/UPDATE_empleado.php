<?php

include('../Conexion/conexion.php');

$NombreEmpleado = $_POST["NombreEmpleado"];
$RutEmpleado = $_POST["RutEmpleado"];
$telefono = $_POST["telefono"];
$Email = $_POST["Email"];
$Cuadrilla = $_POST["Cuadrilla"];
echo $Cuadrilla;
$cargo = $_POST["cargo"];
$pass = $_POST["pass"];
$sql = "UPDATE empleado SET Rut_Empleado='$RutEmpleado',Nombre='$NombreEmpleado',Email='$Email',id_cargo='$cargo',id_cuadrilla='$Cuadrilla',
Telefono='$telefono'";






$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    // echo "<script>alert('Registrado con éxito')</script>"; No se ejecuta esto antes del header
    header('Location:../Apartados/Empleado/ConfiguracionEmpleado.php');
    die;
} else {
    echo    'no';
}
