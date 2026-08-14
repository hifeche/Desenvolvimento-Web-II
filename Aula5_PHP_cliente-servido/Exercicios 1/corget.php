<?php

if(isset($_GET['cor'])){

$cor = $_GET['cor'];

echo "<body style='background-color: '" . $cor . "</body>";

echo $cor;
}else{
    echo "Informe o parâmetro [cor]!";
}
?>
