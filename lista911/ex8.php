<?php

$peixe = $_POST['peixe'];
$calculo = ($peixe - 50) * 4;

if($peixe > 50){
    echo "Sua multa é de: R$ $calculo";
}
else{
echo "Você não precisa pagar multa";
}
?>