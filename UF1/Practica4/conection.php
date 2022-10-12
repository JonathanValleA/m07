<?php 
// Conexion a mi Base de datos
        $db_host = "localhost";
        $db_nombre = "products";
        $db_usuario = "root";
        $db_passwd = "";

        $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
        $consulta = "SELECT * FROM PRODUCTO";

        $products = mysqli_query($connexio, $consulta);
?>