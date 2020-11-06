<?php

include('Sopa.php');

//craer un objeto de la clase (LOS OBJETOS SON VARIABLE)
$ajiaco= new Sopa();

//acceder a un atributo
$ajiaco->cantidadAgua="2 LITROS";
echo($ajiaco->cantidadAgua);

//acceder a metodos
$ajiaco->disfrutarSopa();



?>