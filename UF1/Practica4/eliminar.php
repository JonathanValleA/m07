<?php 
    $id=$_GET['id'];
    include 'conection.php';
    $sql="DELETE FROM producto WHERE id=$id";
    $query = mysqli_query($conexion, $sql);
    if($query){
        header('refresh:0;url=index.php?eliminado');
    }

?>