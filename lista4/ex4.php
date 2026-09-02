<?php

$email = "marianasonequinhas@gmail.com";
$senha = "soqueriapoderdormiragora130210";
$ativo = true;

echo "Login - Facebook <br>";
if($email == "marianasonequinhas@gmail.com" &&
$senha == "soqueriapoderdormiragora130210" &&
$ativo == true){
echo "Login autorizado.";
}
else{
echo "Usuário ou senha invalidos.";
}

?>