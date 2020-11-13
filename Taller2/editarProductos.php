<?php

include("BaseDatosProductos.php");

//1. Crear objeto de la BD
$transaccion = new BaseDatosProductos();

//2. Recibir Datos
if(isset($_POST["botonEditar"]))
{
    //3. Recibir el id que quiero editar
    $ideditar=($_GET["id"]);

    $nombre=$_POST['nombreEditar'];
    $marca=$_POST['marcaEditar'];
    $precio=$_POST['precioEditar'];
    $imagen =$_POST['imagenEditar'];
    $descripcion=$_POST['descripcionEditar'];
    
    //4. consulta para editar un registro
    $consultaSQL="UPDATE productos SET producto='$nombre',marca='$marca',precio='$precio',descripcion='$descripcion',imagen='$imagen' WHERE idProducto='$ideditar'";


    //5. Utilizar el metodo editar
    $transaccion->editarDatos($consultaSQL);
    
        

}







?>