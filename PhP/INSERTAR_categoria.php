<?php

include('../Conexion/conexion.php');

$nombre = $_POST["nombre"];



$insertar = "INSERT INTO categoria(Nombre) 
VALUES ( '$nombre')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Maestro/Categoria.php');
    die;
} else {
    echo $EstadoCliente;
}
