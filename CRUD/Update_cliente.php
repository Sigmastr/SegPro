<?php

include('../Conexion/conexion.php');

$data = '<table class="table table-bordered table-striped">
		<tr>
        <th>Nombre</th>
        <th>Rut</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Región</th>
        <th>Ciudad</th>
        <th>Actividad</th>
        <th>Ejecutivo</th>
		</tr>';

$query = "SELECT * FROM cliente";

if (mysqli_num_rows($result) > 0) {
    $number = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $data .= '<tr>
	<td>' . $row['Nombre'] . '</td>
	<td>' . $row['Rut'] . '</td>
	<td>' . $row['Email'] . '</td>
	<td>' . $row['Telefono'] . '</td>
    <td>' . $row['Region'] . '</td>
    <td>' . $row['Ciudad'] . '</td>
    <td>' . $row['Actividad'] . '</td>
    <td>' . $row['Ejecutivo'] . '</td>
	<td>
		<button onclick="GetUserDetails(' . $row['Rut'] . ')" class="btn btn-warning"><i class="fas fa-edit"></i></button>
	</td>
	
</tr>';
        $number++;
    }
}
