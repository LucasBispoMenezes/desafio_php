<?php
echo "Olá seja bem vindo a sua primeira compra, qual o seu nome ?";
$name = fgets(STDIN);

echo ("blz " . $name . " qual o nome do produto ?");

$Produto = fgets(STDIN);
echo ("qual o valor ?");

$Valor = fgets(STDIN);
echo ("qual a quantidade ?");

$quantidade = fgets(STDIN);
$total = $quantidade * $Valor;

echo "o valor total de sua compra é: {$total}";
