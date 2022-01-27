<?php

include('../Conexion/conexion.php');

$tipo = $_POST["tipo"];



$insertar = "INSERT INTO tipoinstalacion(Tipo) 
VALUES ( '$tipo')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Maestro/TipoServicio.php ');
    die;
} else {
}
