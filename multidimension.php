<?php

//arreglo de varias dimensiones
$productos=array
(

    "producto1"=>array("arroz",1600,"caribe"),
    "prodcuto2"=>array("aceite",5600,"premier"),
    "producto3"=>array("sal",1000,"refisal")


);

print_r($productos);
echo("<br>");


//recorrido
echo("<br>");
echo("<br>");
foreach($productos as $valores)
{
    echo($valores[0]);
    echo("<br>");
}




?>