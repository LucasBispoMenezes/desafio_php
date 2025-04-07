<?php
require "soma.php";
require "subt.php";
require "mult.php";
require "div.php";

echo "==============================" . PHP_EOL;
echo "🌟 Bem-vindo à Calculadora 🌟" . PHP_EOL;
echo "==============================" . PHP_EOL . PHP_EOL;

echo "Por favor, selecione a operação que deseja realizar:" . PHP_EOL;

$operations = ["addition", "subtraction", "division", "multiplication"];

echo PHP_EOL;
echo "0 -> Soma" . PHP_EOL;
echo "1 -> Subtração" . PHP_EOL;
echo "2 -> Divisão" . PHP_EOL;
echo "3 -> Multiplicação" . PHP_EOL;

echo PHP_EOL;
echo "Digite o número da operação desejada: ";

$selectedOption = trim(fgets(STDIN));

if ($selectedOption < 0 || $selectedOption >= count($operations)) {
  echo PHP_EOL . "⚠️  Opção inválida! Por favor, reinicie o programa e tente novamente." . PHP_EOL;
  return;
}

echo PHP_EOL;
echo "Você selecionou: " . ucfirst($operations[$selectedOption]) . PHP_EOL;
echo "Agora digite os números separados por vírgula: ";

$numbers = array_map('floatval', explode(',', trim(fgets(STDIN))));

echo PHP_EOL . "🧮 Resultado: ";

switch ($selectedOption) {
  case 0:
    echo soma(...$numbers);
    break;
  case 1:
    echo subtracao(...$numbers);
    break;
  case 2:
    echo div(...$numbers);
    break;
  case 3:
    echo mult(...$numbers);
    break;
}

echo PHP_EOL . PHP_EOL;
echo "✅ Operação finalizada com sucesso!" . PHP_EOL;
echo "Obrigado por usar a calculadora 😊" . PHP_EOL;
