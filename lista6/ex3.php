<?php

echo "Caixa eletrônico - Itaú <br>";
echo "1 - consulta saldo <br> 2 - Fazer saque <br> 3 - Fazer depósito <br> 4 - Sair <br>";

$opcao = 3;

switch ($opcao) {
    case 1:
        echo "Seu saldo é R$67,00";
        break;
    case 2:
        echo "Qual valor deseja sacar?";
        break;
    case 3:
        echo "Qual valor deseja depositar?";
        break;
    case 4:
        echo "Obrigado por utilizar nosso caixa eletrônico!";
        break;
}

?>