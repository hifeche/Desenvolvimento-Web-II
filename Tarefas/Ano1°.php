<?php

echo "\n Não divisivel por 100. \n";

$anobi = 0;
for ($anobi=1980;$anobi<=2026;$anobi++){
    //ano 2000 não apareçe por ser divisivel pelos dois.
    if($anobi % 4 == 0 && $anobi % 100 != 0){
        echo $anobi. "\n é Ano Bissexto || \n";
    }
}

echo "\n Divisivel por 400. \n";

for ($anobi=1980;$anobi<=2026;$anobi++){
    //ano 2000 aparece por conta do 400 que funciona como uma exceção para os anos que são divididos por 100.
    if(($anobi % 4 == 0 && $anobi % 100 != 0) || ($anobi % 400 == 0)){
        echo $anobi. "\n é Ano Bissexto || \n";
    }
}

?>