<?php

    ($_GET["id"]);

    include("BaseDatosProductos.php");

    //1. Recibo el id que voy a eliminar por la URL(GET)
    $idEliminar=($_GET["id"]);

    //2. Crear el objeto de la clase Base Datos
    $transaccion = new BaseDatosProductos();

    //3. Crear la consultaSQL para eliminar
    $consultaSQL = "DELETE FROM productos WHERE idProducto='$idEliminar'";

    //4. Utilizar el metodo para eliminar Datos
    $transaccion->eliminarDatos($consultaSQL);








?>