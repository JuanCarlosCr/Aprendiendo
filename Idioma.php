<?php

$conexion = mysqli_connect("localhost", "root", "12345678", "aprendiendo");

$la_ciudad = $_POST['idiomas'];

$query = $conexion->query("SELECT * FROM Idioma_Curso WHERE id_Idioma_Curso = $la_ciudad");

echo '<option value="0" selected="" disabled="">Idioma</option>';

while ($row = $query->fetch_assoc()) {
    echo '<option value="' . $row['id_Idioma_Curso'] . '">' . $row['nombre'] . '</option>' . "\n";
}
?>