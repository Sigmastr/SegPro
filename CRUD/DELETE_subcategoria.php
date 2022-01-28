<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM subcategoria where id_subcategoria   ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Maestro/Subcategoria.php');
    die;
} else {
    echo 'error';
}
