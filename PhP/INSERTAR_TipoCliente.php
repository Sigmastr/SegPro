<?php

include('../Conexion/conexion.php');

$nombre_Categoria = $_POST["CategoriaCliente"];


$insertar = "INSERT INTO tipocliente(Categoria_usuario) 
VALUES ( '$nombre_Categoria')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/MenuAdministrador/administrador.php ');
    die;
}
