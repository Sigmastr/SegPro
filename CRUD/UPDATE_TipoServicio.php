<?php

include('../Conexion/conexion.php');

$tipo = $_POST["tipo"];

$sql1 = mysqli_query($conn, "SELECT * FROM tipoinstalacion WHERE Tipo='$tipo'");


$valores = mysqli_fetch_row($sql1);
$rpta = $valores[0];

$sql = "UPDATE tipoinstalacion SET Tipo='$tipo'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Maestro/TipoServicio.php');
    die;
} else {
    echo    'no';
}
