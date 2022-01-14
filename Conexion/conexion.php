<?php
$servername = "localhost";
$database = "segproject";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("No se ha podido conectar: " . mysqli_connect_error());
}
echo "Se ha conectado satisfactoriamente";
