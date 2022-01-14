<?php

include('../Conexion/conexion.php');

$PeriodoAcceso = $_POST["PeriodoAcceso"];


$insertar = "INSERT INTO tipocontrato(periodo_acceso) 
VALUES ( '$PeriodoAcceso')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/MenuAdministrador/administrador.php ');
    die;
}
