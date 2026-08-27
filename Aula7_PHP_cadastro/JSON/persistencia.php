<?php

define("DIR_Arquivos", "arquivos");

function salvarDados(array $dados, string $nomeArquivo){
    $json = json_encode($dados, JSON_PRETTY_PRINT);

    file_put_contents(DIR_Arquivos . "/" . $nomeArquivo , $json);
}


?>