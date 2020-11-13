<?php

include('BaseDatosProductos.php');


if(isset($_POST["botonEnvio"])){


    //Recibo los datos del formulario
    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];
    $precio=$_POST['precio'];
    $imagen =$_POST['imagen'];
    $descripcion=$_POST['descripcion'];

    //Copia u objeto de la clase BD
    $transaccion=new BaseDatosProductos();

    //crear consulta
    $consultaSQL="INSERT INTO productos(producto, marca, precio, imagen, descripcion) VALUES ('$nombre','$marca','$precio','$imagen','$descripcion')";

    //llamo al metodo de la clase BD agregarDatos()
    $transaccion->agregarDatos($consultaSQL);

    //redireccion
    header("location:formularioProductos.php");
    

    


}