<?php

include('../Conexion/conexion.php');

$EstadoCliente = $_POST["EstadoCliente"];


$insertar = "INSERT INTO estado_cliente_sistema(Estado_Cliente) 
VALUES ( '$EstadoCliente')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/MenuAdministrador/administrador.php ');
    die;
} else {
    echo $EstadoCliente;
}
