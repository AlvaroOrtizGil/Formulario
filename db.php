<?php
$conex = mysqli_connect("localhost", "root", "", "registro");

// Verificar si la conexión ha fallado
if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
