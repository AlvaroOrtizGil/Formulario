<?php
include("db.php");

if (isset($_POST['registro'])) { // Si se presiona el botón de registro
    if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) { // Comprobar que los campos no estén vacíos
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $fechareg = date("Y-m-d");

        // Consulta para insertar los datos en la base de datos
        $consulta = "INSERT INTO datos (nombre, apellido, fecha_reg) VALUES ('$nombre', '$apellido', '$fechareg')";
        $resultado = mysqli_query($conex, $consulta);
        
        if ($resultado) {
            // Redirigir a la página de inicio para evitar el reenvío del formulario al refrescar
            header("Location: index.php");
            exit(); // Terminar el script después de la redirección
        } else {
            // Mensaje de error
            echo "<h3 class='bad'>Ha ocurrido un error</h3>";
        }
    } else {
        // Mensaje de campos incompletos
        echo "<h3 class='bad'>Por favor, complete los campos</h3>";
    }
}
?>
