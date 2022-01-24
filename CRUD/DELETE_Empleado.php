<?php

include('../Conexion/conexion.php');

$ruut = $_GET['id'];

$sql = "DELETE FROM empleado where Rut_Empleado ='$ruut'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/ConfiguracionEmpleado.php');
    die;
} else {
    echo 'error';
}


//no se puede eliminar un empleado, si es que este está a cargo de una bodega. Debe primero cambiar el encargado.
