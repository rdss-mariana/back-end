<?php

echo "Sua playlist: <br><br>";

$musicas = ["Lonely Day", "Rastros na Areia", "Sign of the Times", "Chuva de Arroz", "Tudo o que você quiser", "Cotidiano"];

foreach($musicas as $musicas2){
    echo "$musicas2 <br>";
}

$qnt = count ($musicas);
echo "<br> Na playlist há $qnt músicas";

?>