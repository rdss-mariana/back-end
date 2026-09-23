<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "marianavbb@gmail.com" && $senha == "130210"){
    echo "Login bem sucedido!";
} else{
    echo "Login ou senha inválido!";
}
?>