<?php

$conexion = mysqli_connect("localhost", "root", "12345678", "aprendiendo");

$la_ciudad = $_POST['ciudades'];

$query = $conexion->query("SELECT * FROM Ciudad_Curso WHERE id_Ciudad_Curso = $la_ciudad");

echo '<option value="0" selected="" disabled="">Ciudad</option>';

while ($row = $query->fetch_assoc()) {
    echo '<option value="' . $row['id_Ciudad_Curso'] . '">' . $row['nombre'] . '</option>' . "\n";
}
?>
