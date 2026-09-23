<?php

$valor1 = $_POST["1"];
$valor2 = $_POST["2"];
$valor3 = $_POST["3"];

$media = ($valor1 + $valor2 + $valor3) / 3;

if($media >= 6){
    echo "A nota é:", $media ," você passou";
}
else{
echo "A nota é:", $media ," você reprovou";
}
?>