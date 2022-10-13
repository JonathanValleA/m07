<?php
    include 'conection.php';
    $id = $_POST['id'];
    $name = $_POST['Name'];
    $descripcion = $_POST['Descripcion'];
    $price = $_POST['Price'];

    $actualizar = "UPDATE producto SET name='$name', descripcion='$descripcion', price='$price' WHERE id=$id";
    $resultado = mysqli_query($conexion, $actualizar);

    if($resultado){
        echo "<script>alert('Se han actualizado los cambios'); window.location='index.php';</script>";
    }else{
        echo "<script>alert('No se pudieron actualizar los datos'); window.history.go(-1);</script>";
    }
?>