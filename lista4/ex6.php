<?php

$idade = 70;
$deficiente = true;
$gestante = false;

if ($idade >= 60 && $deficiente == true) {
echo "Atendimento prioritário especial";
} else if ($idade >= 60 || $deficiente == true || $gestante == true) {
echo "Atendimento prioritário";
} else {
echo "Atendimento normal";
}

?>