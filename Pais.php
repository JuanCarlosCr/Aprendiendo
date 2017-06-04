<?php

$conexion = mysqli_connect("localhost", "root", "12345678", "aprendiendo");

$query = $conexion->query("SELECT * FROM Pais_Curso");

echo '<option value="0" selected="" disabled="">Pa&iacutes</option>';

while ($row = $query->fetch_assoc()) {
    echo '<option value="' . $row['id_Pais_Curso'] . '">' . $row['nombre'] . '</option>' . "\n";
}
?>