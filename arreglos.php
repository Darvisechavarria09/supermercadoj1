<?php

//arreglo indexado (los nombres de cada elemento son indices o numeros);
$productos=array("arroz","atun","apio","pollo");

print_r($productos);

echo($productos[1]);

//TENGO UN FORM ()
/*$productosFormulario=array($_POST["producto1"],$_POST["producto2"]);*/

//arreglos asociativos
echo("<br>");
$productosAsociados=array=('producto1'=>"arroz", 'producto2'=>"atun".'producto3'=>"apio",'producto4'=>"pollo")
pirnt_r($productosAsociados);
echo("<br>");
echo($productosAsociados["producto2"]);

//Arreglo de numeros
echo(">br<");
$numeros=array(1,2,3,4,5,6,7,8,9,10);

/*for($j=0;$j<cont($numeros);$j++)
{
    echo($numeros[$centinela]);
    echo("<br>");

}*/

foreach($productosAsociados as $clave=>$valor)
{
    echo($valor);
    echo("<br>");
}

print_r($arreglo);


?>