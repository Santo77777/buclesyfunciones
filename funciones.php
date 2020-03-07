<?php

//funciones para calcular la edad de una persona
//Ejemplo 1
function calcularEdad ($nacimiento){

    $edad=2020-$nacimiento; 
    echo("La edad de la persoan es: " . $edad);
}


function calcularEdad2($actual, $nacimiento){

    $edad=$nacimiento-$actual;
    echo("La edad de la persoan es: " . $edad);
}

function calcularEdad3($actual, $nacimiento){
    $edad=$actual-$nacimiento;

    return ($edad);
}



?>