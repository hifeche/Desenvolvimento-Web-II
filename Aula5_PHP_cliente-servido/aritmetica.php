<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


if (!isset($_GET["i"]) || $_GET["i"] === "") {
    $falta[] = "início (i)";
}

if (!isset($_GET["r"]) || $_GET["r"] === "") {
    $falta[] = "razão (r)";
}

if (!isset($_GET["q"]) || $_GET["q"] === "") {
    $falta[] = "quantidade (q)";
}

if (!empty($falta)) {
    echo "Os seguintes parâmetros não foram informados: "
       . implode(", ", $falta) . ".";
    exit;
}
$inicio = $_GET["i"];

$razao = $_GET["r"];

$quantidade = $_GET["q"];

$resultado = $inicio;

for ($i = 0; $i < $quantidade; $i++){
    echo "Resultado " . ($i + 1) . ": " . $resultado . "<br>";
    $resultado += $razao; //soma a razão para o proximo número
}

//http://localhost/web2/aritmetica.php?i=2&r=3&q=5

?>