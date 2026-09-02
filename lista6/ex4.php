<?php

echo "Bem-vindo a nossa pizzaria!! <br>";
echo "<br> ----- menu ----- <br>";
echo "<br> 1 - Pizza <br> - Calabresa <br> - Frango <br> - Portuguesa <br> - Quatro queijos <br>";
echo "<br> 2 - Hamburguer <br> - X-Burguer <br> - X-Salada <br> - X-Bacon <br>";
echo "<br> 3 - Refrigerante <br> - Coca-Cola <br> - Fanta <br> - Sprite <br>";
echo "<br> 4 - Sobremesa <br> - Sorvete  <br> - Pudim <br> - Mousse maracujá <br>";
echo "<br> ----- sair ----- <br>";

$pedido = "pizza calabresa";

switch ($pedido) {
    case "pizza calabresa":
        echo "<br> Você pediu uma pizza de calabresa!";
        break;
    case "pizza frango":
        echo "<br> Você pediu uma pizza de frango!";
        break;
    case "pizza portuguesa":
        echo "<br> Você pediu uma pizza de portuguesa!";
        break;
    case "pizza quatro queijos":
        echo "<br> Você pediu uma pizza de quatro queijos!";
        break;
    case "X-Burguer":
        echo "<br> Você pediu um X-Burguer!";
        break;
    case "X-Salada":
        echo "<br> Você pediu um X-Salada!";
        break;
    case "X-Bacon":
        echo "<br> Você pediu um X-Bacon!";
        break;
    case "coca-cola":
        echo "<br> Você pediu um coca-cola!";
        break;
    case "fanta":
        echo "<br> Você pediu um fanta!";
        break;
    case "sprite":
        echo "<br> Você pediu um sprite!";
        break;
    case "sorvete":
        echo "<br> Você pediu um sorvete!";
        break;
    case "pudim":
        echo "<br> Você pediu um pudim!";
        break;
    case "mousse maracujá":
        echo "<br> Você pediu uma mousse de maracujá!";
        break;
    default:
        echo "<br> Pedido inválido!";
        break;
}

?>