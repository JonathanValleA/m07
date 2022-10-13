<?php 
    $id=$_GET['id'];
    include 'conection.php'; 
    $sql = "SELECT * FROM producto WHERE id=$id";
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Actualizar</title>
</head>
<body>
    <form action="procesar_actualizar.php" method="post">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Price</th>
                </th>
            </thead>
            <tbody>
                    <?php $query = mysqli_query($conexion, $sql);
                        while($product=mysqli_fetch_assoc($query)){ ?>
                        <tr>
                            <td><?php echo $product['id']?></td>
                            <input type="hidden" value="<?php echo $product['id']; ?>" name="id">
                            <td><input type="text" value="<?php echo $product['Name']; ?>" name="Name"></td>
                            <td><input type="text" value="<?php echo $product['Descripcion']; ?>" name="Descripcion"></td>
                            <td><input type="text" value="<?php echo $product['Price']; ?>" name="Price"></td>
                            <td><input type="submit" value="Actualizar"></td>
                        </tr>
                    <?php } mysqli_free_result($query);?>
        </table>
    </form>
</body>