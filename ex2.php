<?php

$nota1 = 7;
$nota2 = 10;
$frequencia = 97;

$media = ($nota1 + $nota2) / 2;

echo "Média: ", $media . "<br>";
echo "Frequência: ", $frequencia . "%<br>";

if ($media >= 6 && $frequencia > 75) {
    echo "Aluno aprovado!";
} else {
    echo "Aluno reprovado!";
}

?>