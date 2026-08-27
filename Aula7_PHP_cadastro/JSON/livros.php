<?php
//busca os livros já cadastrados no arquivo JSON
$livros = array();

//verificar se o usuário já enviou o formulário
if(isset($_POST["titulo"])){
    //captura os dados do formulário
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $pag = $_POST("paginas");

    $livro = array(
        "id" => uniqid(),
        "titulo" => $titulo,
        "genero" => $genero,
        "Paginas" => $pag
    );

    array_push($livros , $livro);

    Salvardados($livros, "livros_JSON");

    // chmod -R o+w arquivos/
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>

<h1>Cadastro de livros</h1>

<h3>Cadastre seu livro aqui</h3>
<form method="POST" action="" >
    <input type="text" name="titulo" id="titulo" 
        placeholder="Informe o título"  />
    
    <br><br> 

    <select name="genero" id="genero">
        <option value="">--Selecione o gênero--</option>
        <option value="D">Drama</option>
        <option value="F">Ficção</option>
        <option value="R">Romance</option>
        <option value="O">Outro</option>
    </select>
    <br><br>

    <input type="number" name="qtd_paginas" id="qtd_paginas" 
        placeholder="Informe o número de páginas">
    <br><br>

    <input type="submit" value="Enviar" />
</form>

<h3>Livros cadastrados</h3>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Gênero</th>
        <th>Quant. Páginas</th>
        <th>Excluir</th>
    </tr>

</table>

</body>
</html>
