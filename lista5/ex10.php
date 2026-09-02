<?php

$peso = 48;
$altura = 1.88;
$resultado = $peso / ($altura * $altura);

echo "IMC: ", $resultado ,"\n";

if ($resultado >= 19 && $resultado <= 24) {
    echo "Peso ideal";
} elseif ($resultado >= 25 && $resultado <= 29) {
    echo "Sobrepeso";
} elseif ($resultado >= 30 && $resultado <= 34) {
    echo "Obesidade Grau I";
} elseif ($resultado >= 35 && $resultado <= 39) {
    echo "Obesidade Grau II";
} 
elseif ($resultado > 39) {
    echo "Obesidade Grau III";
} elseif ($resultado < 19 ){
    echo "Meu filho voce ta magro demais ta precisando comer uns arrozes e feijoes";
}
else {
    echo "Não foi possível calcular";
}

?>