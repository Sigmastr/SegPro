<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM categoria where id_Categoria  ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Maestro/Categoria.php');
    die;
} else {
    echo 'error';
}
