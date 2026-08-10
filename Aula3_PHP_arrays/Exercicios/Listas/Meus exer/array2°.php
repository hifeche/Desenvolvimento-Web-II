<?php

$nome = array ('Anderson', 'Felipe', 'Rafael', 'Tiago', 'Henrique');
$gaveta = array_merge($nome);

echo implode (', ', $gaveta);

//implode(): Junta todos os elementos do array em um único texto, separados por um caractere escolhido.
?>