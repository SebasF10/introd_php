<?php
    require 'modelo/conexcion.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Usuario</title>
</head>
<body>
    <h1> Pagina Usuario <h1>
    <hr>
    <?php
        echo 'Usuario: '.$nombre_usuario;
    ?>
    <hr>
    <a href="registrar_empleado.php">Registar empleado</a>
    <hr>
    <h2> Consultas <h2>
    <hr>
    <a href=modelo\consultas_empleados.php>Empleados</a>
    <hr>
    <a href=#>Departamentos</a>
    <hr>
    <a href="modelo/cerrar_sesion.php">Cerrar Sesion</a>

</body>
</html>