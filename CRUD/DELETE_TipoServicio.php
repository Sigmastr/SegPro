<?php

include('../Conexion/conexion.php');


$id = $_GET['id'];

$sql = "DELETE FROM tipoinstalacion where id_tipoIns ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Maestro/TipoServicio.php');
    die;
} else {
    echo 'error';
}
