<?php
    include ('conection.php');
    
    $nombre = $_POST['Name'];
    $description = $_POST['Descripcion'];
    $precio = $_POST['Price'];

    $agregar = "INSERT INTO producto(`Name`, `Descripcion`, `Price`) VALUES('$nombre', '$description', '$precio')";
    $final = mysqli_query($conexion, $agregar);
    if($final){
        echo "<script>alert('Se han añadido la tabla a la BD'); window.location='index.php';</script>";
    }else{
        echo "<script>alert('No se pudieron añadir los datos'); window.history.go(-1);</script>";
    }
?>