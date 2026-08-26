<?php

$usuario = "joaopaulooz";
$idade = 67;

if($idade < 13){
    echo "Cadasro nao permitido!";
}
else if($idade >= 13 && $idade < 16){
    echo "so pode usar a plataforma com controle dos pais";
}
else{
    echo "plataforma liberada";
}

?>