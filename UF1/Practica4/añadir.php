<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Añadir</title>
</head>
<body>
    <!-- Formulario -->
    <form action="añadir_producto.php" method="post">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Price</th>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="Name"></td>
                    <td><input type="text" name="Descripcion"></td>
                    <td><input type="text" name="Price"></td>
                    <td><input type="submit" value="Añadir Producto"></td>
                            
                </tr>
        </table>
    </form>
</body>