<?php

$nome = "Mariana Rosa dos Santos";
if($nome != ""){
echo "Olá, $nome!";
}
echo "<br>";

$senha = 5806;
$confirmacao_senha = 5806;

if($senha == $confirmacao_senha){
echo "Senha confirmada";
}
else{
echo "Senha incorreta";
}
echo "<br>";

$idade = 16;
echo "$idade anos";
if($nome != "" && $idade >= 18 && $senha == $confirmacao_senha){
echo "<br>Cadastro realizado com sucesso";
}
else{
echo "<br>Cadastro não realizado";
}
?>