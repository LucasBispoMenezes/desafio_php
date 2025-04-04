<?php
define("OLD_USER", "flaco");


function process_coupon(int | float $value_total, bool $is_new_user)
{
  $percent_discount = $is_new_user ? 0.10 : 0.05;

  return ($value_total - ($value_total * $percent_discount));
}


echo "===========================================================\n";
echo "Olá Bem-vindo ao simulador de Loja com Promoções Dinâmicas\n";
echo "Digite seu nome de usuário: ";

$username = trim(fgets(STDIN));
$is_new_customer = OLD_USER == $username ? true : false;

if ($is_new_customer) {
  echo "Bem-vindo de volta " . OLD_USER . "!\n";
} else {
  echo "Bem-vindo $username! \n";
};

echo "Digite o valor total da sua compra: ";
$total_value = trim(fgets(STDIN));

echo "Digite o código do cupom: ";
$coupon_code = trim(fgets(STDIN));

echo "Forma de pagamento: \n";
echo "à vista: Digite '1' \n";
echo "parcelado: Digite a quantidade de parcelas  \n";
echo "Digite -> ";
$payment_method = trim(fgets(STDIN));

$total_steps = 100;
$delay_per_step_ms = 20; // Milissegundos (total de ~2 segundos)
$bar_length = 50; // Número de caracteres para a barra

echo "Processando...\n";
for ($i = 0; $i <= $total_steps; $i++) {
  $progress_percent = $i;
  $filled_length = round($bar_length * $progress_percent / 100);
  $empty_length = $bar_length - $filled_length;

  $bar = '[' . str_repeat('=', $filled_length) . str_repeat(' ', $empty_length) . ']';
  $percentage = sprintf('%3d%%', $progress_percent);

  echo "\rProgresso: $bar $percentage"; // \r para retornar ao início da linha

  usleep($delay_per_step_ms * 1000);
};
echo "\nProcessamento Concluído, aqui está sua NFC!\n";
echo "";
$valid_coupon = "php_ruby_js";
$has_coupon = strtolower($coupon_code) === $valid_coupon;


if ($has_coupon) {
  $final_value = process_coupon($total_value, !$is_new_customer); // Assumindo que is_new_user na função significa um usuário NOVO

  echo "Cupom aplicado com sucesso!\n";
  echo "Valor com desconto: R$ " . number_format($final_value, 2, ',', '.') . "\n";

  if (!$is_new_customer && $payment_method == '1') {
    echo "Você ganhou FRETE GRÁTIS por ser um novo cliente e pagar à vista!\n";
  }
} else {
  $final_value = $total_value;
  echo "Cupom inválido. Nenhum desconto aplicado.\n";
  echo "Valor: R$ " . number_format($final_value, 2, ',', '.') . "\n";
}
