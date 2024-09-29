<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registra Usuario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

    <!-- Formulario de registro -->
    <form method="post">
        <h1>¡Regístrate!</h1>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="submit" name="registro" value="Registrar">
    </form>
    
    <!-- Incluir el archivo de registro para procesar la inserción -->
    <?php
    include("registrar.php");
    ?>
    
    <!-- Mostrar los usuarios registrados en la base de datos -->
    <h2>Usuarios Registrados</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        <?php
        // Consulta para obtener todos los usuarios
        $usuarios = "SELECT nombre, apellido FROM datos";
        $resultado = mysqli_query($conex, $usuarios);

        // Mostrar los usuarios en una tabla
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
