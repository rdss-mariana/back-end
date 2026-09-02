<?php

$valor_pedido = 100;
$valor_minimo_entrega = 50;

if($valor_pedido >= $valor_minimo_entrega){
echo "Entrega grátis";
}
else{
echo "Entrega paga (R$ 10,00)";
}
echo "<br>";

$idade_cliente = 18;
$idade_bebida = 18;
if($idade_cliente >= $idade_bebida){
echo "Venda de bebida acoólica liberada";
}
else{
echo "Venda de bebida acoólica negada";
}
echo "<br>";

$quantidade_pedida = 2;
$quantidade_estoque = 35;
if($quantidade_pedida <= $quantidade_estoque){
echo "Pedido aceito";
}
else{
echo "Pedido negado (estoque insuficiente)";
}
echo "<br>";
$status_pedido = "pago";
if($status_pedido == "pago"){
echo "Pedido liberado para produção";
}
else{
echo "Pedido não liberado para produção";
}
?>