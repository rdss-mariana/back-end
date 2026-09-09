<?php

$numeroNegativo = -25;
$numeroDecimalNegativo = -4.75;
$numeroPositivo = 10;

$resultado1 = abs($numeroNegativo);
$resultado2 = abs($numeroDecimalNegativo);
$resultado3 = abs($numeroPositivo);

echo "O absoluto de -25 é: " . $resultado1 . "<br>";        
echo "O absoluto de -4.75 é: " . $resultado2 . "<br>";     
echo "O absoluto de 10 é: " . $resultado3 . "<br";      

// A função abs no PHP calcula o valor absoluto de um número, ou seja, transforma qualquer número negativo em
// positivo e mantém os números que já são positivos.

?>