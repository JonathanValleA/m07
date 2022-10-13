<?php 
    include 'conection.php';
    $sql = "SELECT * FROM PRODUCTO";
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PRODUCTOS</title>
</head>
<body>
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
        <!-- Ir añadiendo los productos en la tabla -->
        <?php $resultado = mysqli_query($conexion, $sql);
        $contador = 1;
            while($product=mysqli_fetch_assoc($resultado)) { ?>

                <tr>
                    <td><?php echo $contador++?></td>
                    <td><?php echo $product['Name']; ?></td>
                    <td><?php echo $product['Descripcion']; ?></td>
                    <td><?php echo $product['Price']; ?></td>
                    <td><a class="btn btn-outline-primary" href="actualizar.php?id=<?php echo $product['id']; ?>">Edit</a></td>
                    <td><a class="btn btn-outline-danger" href="eliminar.php?id=<?php echo $product['id']; ?>">Delete</a></td>
                </tr>
         <?php } mysqli_free_result($resultado); ?>
         <div><a class="btn btn-success" href="añadir.php">Añadir</a></div>
</table>
</body>
