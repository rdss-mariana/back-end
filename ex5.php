<?php

$nome = "joao";
$nivel_acesso = 2;

if($nivel_acesso == 1){
    echo "acesso básico";
}
else if($nivel_acesso == 2){
    echo "acesso intermediario";
}
else{
    echo "acesso inválido";
}

?>