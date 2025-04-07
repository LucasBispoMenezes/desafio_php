<?php
function funçãoPadrão()
{
  return "Olá, esta é uma função padrão!";
};

$funcaoAnonima = function () {
  return "Olá, esta é uma função anônima!";
};

$arrowFunction = fn () => "Olá, esta é uma função de seta!";

$closureFunction = function () use ($funcaoAnonima) {
  return $funcaoAnonima();
};

var_dump(funçãoPadrão());
var_dump($funcaoAnonima());
var_dump($arrowFunction());
var_dump($closureFunction());