<?php

//Função
function area($raio){
    $area = 3.14 * $raio * $raio;
    return $area; 
}

function circunferencia($raio){
    return 2 * 3.14 * $raio;
}

//Programa principal
echo "Área círculo raio 5m: " . area(5) . "m²<br>";
echo "Circunferência círculo raio 5m: " . circunferencia(5) . "m<br><br>";

?>