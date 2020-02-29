<?php
$clase1 = "Clase 4 bucles, arreglos y funciones";
echo $clase1;

//Arreglos indexado 

$arreglo= array("Santiago", "Andres", "Maria", "Emilio", "Carolina");
echo "<br>";
print_r($arreglo);
echo "<br>*********************************************************************";
echo "<br>";

//Arreglos asociativos 

$arreglo = array('usuario1'=>"Santiago", 'usuario2'=> "Andres", 'usuario3'=>"Maria", 'usuario4'=>"Emilio");
echo "<br>";
print_r($arreglo);
echo "<br>*********************************************************************";
echo "<br>";


// Tamaño de arreglo

$size= count($arreglo);
echo "<br>";
echo ("El tamaño de nuetro arrelgo es: ". $size);
echo "<br>*********************************************************************";
echo "<br>";

//Bucle FOR

for($centinela=0; $centinela<=10; $centinela++){

    echo("El valor de centinela es: " . $centinela . "<br>");
}

echo "<br>*********************************************************************";
echo "<br>";

//Bucle FOR para recorrer arreglos
$arreglo= array("Santiago", "Andres", "Maria", "Emilio", "Carolina");


for($x =0; $x < count($arreglo); $x++){
    echo("<br>" . $arreglo[$x] . "<br>");

}
echo "<br>*********************************************************************";
echo "<br>";

//Bucle FOREACH

$arreglo= array('usuario1'=>"Santiago", 'usuario2'=> "Andres", 'usuario3'=>"Maria", 'usuario4'=>"Emilio");

foreach($arreglo as $clave=>$valor){
    echo "La clave es: " . $clave;
    echo "<br>" . ($valor) . "<br>"; 
    echo "<br>";
}
echo "<br>*********************************************************************";
echo "<br>";

//Bucle foreach para arreglo indexado  en valor

echo "En VALOR";
$arreglo= array("Santiago", "Andres", "Maria", "Emilio", "Carolina");
foreach($arreglo as $clave=>$valor){
    echo "<br> La CLAVE del cajon es: " . $clave;
    echo "<br> El VALOR del cajon es: " . $valor;
    
}
echo "<br>*********************************************************************";
echo "<br>";





?>