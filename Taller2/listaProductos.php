<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lista de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="text-center">SUPER MERCADO DON DARIO</h1>
        <hr>
    </header>
    
    <?php

    include("BaseDatosProductos.php");

    //1. Crear un objetos de la clase BaseDatos
    $transaccion=new BaseDatosProductos();

    //2. Definir la consulta para buscar datos
    $consultaSQL="SELECT * FROM productos ";

    //3. Ejecutar el metodo consultarDatos()
    // y almacenar la respuesta en una variable
    $productos=$transaccion->consultarDatos($consultaSQL);




    ?>

    <main>
        <center><h3>LISTADO DE PRODUCTOS</h3></center>
        <hr>

        <div>
            <div class="row row-cols-1 row-cols-md-3">

                <?php foreach($productos as $producto):?>

                    <div class="col mb-4">
                        <div class="card">
                            <img src="<?php echo($producto["imagen"]);?>" class="card-img-top" alt="FOTO">
                            <div class="card-body">
                            <h1 class="card-title"><?php echo($producto["producto"]);?></h1>
                            <h3 class="card-title"><?php echo($producto["marca"]);?></h3>
                            <h3 class="card-title">$<?php echo($producto["precio"]);?></h3>
                            <p class="card-text"><?php echo($producto["descripcion"]);?></p>
                            <a href="eliminarProductos.php?id=<?php echo($producto['idProducto'])?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo($producto['idProducto'])?>">
                                Editar
                            </button>
                            </div>
                        </div>

                        <div class="modal fade" id="editar<?php echo($producto['idProducto'])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edición de Producto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="editarProductos.php?id=<?php echo($producto['idProducto']) ?>" method="POST">
                                            <div class="form-group">
                                                <label>Nombre Producto:</label>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto['producto']) ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Marca Producto:</label>
                                                <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto['marca']) ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>precio Producto:</label>
                                                <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto['precio']) ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Imagen</label>
                                                <input type="text" class="form-control" name="imagenEditar" value="<?php echo($producto['imagen']) ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion:</label>
                                                <textarea class="form-control" rows="3" name="descripcionEditar"><?php echo($producto['descripcion']) ?></textarea>
                                            </div>
                                                <button type="submit" class="btn btn-warning" name="botonEditar">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach?>


            </div>
        </div>

    </main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>