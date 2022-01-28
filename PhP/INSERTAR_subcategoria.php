<?php

include('../Conexion/conexion.php');

$subcategoria = $_POST["subcategoria"];
echo $subcategoria;
$categoria = $_POST["categoria"];
echo $categoria;

$insertar = "INSERT INTO subcategoria(NombreSubcategoria,id_Categoria ) 
VALUES ( '$subcategoria','$categoria')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Maestro/Subcategoria.php');
    die;
} else {
}
