<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="text-center">SUPER MERCADO DON DARIO</h1>
        <hr>
    </header>
    <main>
        <div class="container">
            <form action="registrarProductos.php" method="POST">
                <h3>REGISTRO DE PRODUCTOS</h3>
                
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre Producto" name="nombre" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca Producto" name="marca" required>
                    </div>
                </div>
                <br>

                <div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Precio Producto" name="precio" required>
                    </div>
                </div>

                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold">Imagen</label>
                        <input type="text" class="form-control" placeholder="URL Imagen" name="imagen" required>
                    </div>
                </div>
                
                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" rows="4" name="descripcion" required></textarea>
                    </div>
                </div>
                <br>
                
                
                <button type="submit" class="btn btn-info btn-primary" name="botonEnvio">Registrar</button>
                <a href="listaProductos.php" class="btn btn-warning">Listar</a>
            </form>
        </div>
    
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer>
        <div class="aut_cont_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2>SUPER MERCADO DON DARIO</h2>
                        <p>Establecimiento comercial de venta al por menor
                            en el que se expenden todo género de artículos alimenticios ,
                            bebidas , productos de limpieza , etc.,
                            y en el que el cliente se sirve a sí mismo y paga a la salida .</p>
                    </div>
                    <div class="col-md-3">
                        <h2>Recomendado</h2>
                        <p>Surte tu hogar con nosotros,
                            Super Mercado Don Dario S.A, 
                            el mejor supermercado
                            a nivel nacional e internacional.</p>
                    </div>
                    <div class="col-md-3">
                        <h3>SUPER MERCADO DON DARIO</h3>
                        <h6>
                        <p>Super Mercado Don Dario,
                             marca registrada
                            Super Mercado Don Dario S.A
                            Servicio al cliente (4) 444 03 66
                            Medellín, Antioquia</p></h6>
                    </div>
                    <div class="col-md-3">
                        <h3>Contactenos</h3>
                        <p>Tel:2234566</p>
                        <p>cel:300452166</p>
                        <p>Dirección:Carrera 33 #49-33</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>