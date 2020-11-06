<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <?php

    include("BaseDatos.php");

    //1. Crear un objetos de la clase BaseDatos
    $transaccion=new BaseDatos();

    //2. Definir la consulta para buscar datos
    $consultaSQL="SELECT * FROM usuarios WHERE 1";

    //3. Ejecutar el metodo consultarDatos()
    // y almacenar la respuesta en una variable
    $usuarios=$transaccion->consultarDatos($consultaSQL);

    print_r($usuarios);




    ?>

    <main>

        <div>
            <div class="row row-cols-1 row-cols-md-3">

                <?php foreach($usuarios as $usuario):?>

                    <div class="col mb-4">
                        <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                            <h3 class="card-title"><?php echo($usuario["nombre"]);?></h3>
                            <h3 class="card-title"><?php echo($usuario["apellido"]);?></h3>
                            <p class="card-text"><?php echo($usuario["descripcion"]);?></p>
                            <a href="eliminarUsuarios.php?id= <?php echo($usuario['idUsuario'])?>" class="btn btn-danger">Eliminar</a>
                            <a href="#" class="btn btn-primary">Editar</a>
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