
<?php
    try{
            $connect_PDO = new PDO ("mysql:host=localhost; dbname=products", "root", "");
            //Capturem errors de l’objecte Exception per a mostrar en el catch
            $connect_PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexió correcte!";     
    }catch(Exception $e){
            die("Error: " . $e->GetMessage());
    }finally{
            $connect_PDO = null;
    }
//Fem la QUERY per obtindre tota la info de la taula
$consulta = "SELECT * FROM PRODUCTO";
$products = exec($consulta);
?>
<html>

<?php 
    include 'conection.php';
    $sql = "SELECT * FROM PRODUCTO";
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Hola</title>
</head>
<body>
<table class="table">
    <thead>
    	<tr>
	// 
          <th scope="col">#</th>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>

	
      <?php foreach ($products as $i => $product){ ?>
        <tr>
            <th scope="row"><?php echo $i +1 ?></th> <!-- augmentem el index i -->
            <td><?php echo $producto['id'] ?></td> <!--Accedim a NumID -->
            <td><?php echo $producto['Name'] ?></td> <!--Accedim a Name-->
            <td><?php echo $producto['Descripcion'] ?></td> <!--Accedim a Description-->
            <td><?php echo $producto['Price'] ?></td> <!--Accedim a Price -->
            <td><a href="edit.php?id=<?php echo $producto['id']?>"><button type="button" class="btn btn-outline-primary">Edit</button></a></td>
            <td><a href="delete.php?id=<?php echo $producto['id']?>"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
        </tr>
     <?php } ?>
    </tbody>
</table>
<!-- SECCIÓ PER AFEGIR PRODUCTES --> 
<div class="container p-4">
		<div class="row">
			<div class="col-md-4">
				<div class="card card-body">
				<!-- A través del mètode POST li enviem les dades del formulari a l'arxiu add_product.php -->
					<form action="añadir_producto.php" method="POST"> 
						<div class=form-group>
							<input type="text" name="name" class="form-control" placeholder="Name" autofocus>
						</div>
						<div class=form-group>
							<textarea name="description" rows="3" class="form-control" placeholder="Description"></textarea>
						</div>
						<div class=form-group>
							<input type="text" name="price" class="form-control" placeholder="price">
						</div>
						<div class=form-group>
							<input type="text" name="quantity" class="form-control" placeholder="Quantity">
						</div>
						<input type="submit" class="btn btn-success btn-block" name="add_product" value="+ Producte">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


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

