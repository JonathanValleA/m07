<?php 
// Conexion a mi Base de datos
        $db_host = "localhost";
        $db_nombre = "products";
        $db_usuario = "root";
        $db_passwd = "";

        $conexion = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
        mysqli_set_charset($conexion, 'utf8');
?>
