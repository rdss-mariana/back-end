<?php

$n1 = 10;
$n2 = 5;
$operacao = "+";

if($operacao == "+"){
    echo "Soma é ", $n1 + $n2;
}
else if($operacao == "-"){
    echo "subtração é ", $n1 - $n2;
}
else if($operacao == "*"){
    echo "multiplicação é ", $n1 * $n2;
}
else if($operacao == "/"){
    echo "divisão é ", $n1 / $n2;
}
else{
    echo "operação inválida";
}

?>