<?php

include('../Conexion/conexion.php');

$ruut = $_GET['id'];

$sql = "DELETE FROM cliente where rut='$ruut'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/FichaCliente.php');
    die;
} else {
    echo 'error';
}
