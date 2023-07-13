<?php

/* Escreva um script em PHP que receba um número inteiro positivo como entrada,
* calcule e devolva o número presente na sequência Fibonacci para a posição informada.
* O script deve ser capaz de lidar com números grandes, evitando erros de overflow.
*/

function fibonacci($n) { // Declarando a Função chamada fibonacci e adicionando um número inteiro positivo como entrada
  if ($n <= 1) {
    return $n;
  }

  $prev1 = 0;
  $prev2 = 1;

  for ($i = 2; $i <= $n; $i++) {
    $current = bcadd($prev1, $prev2); // Calcula o próximo número da sequência usando a função bcadd para evitar overflow
    $prev1 = $prev2;
    $prev2 = $current;
  }

  return $prev2;
}

// Recebe o número da posição da sequência
$position = isset($_GET['position']) ? intval($_GET['position']) : 4565;

// Verifica se a posição é válida
if ($position < 0) {
  echo "Posição inválida! Insira um número inteiro positivo.";
  exit;
}

// Chama a função fibonacci para obter o número correspondente à posição informada
$result = fibonacci($position);

echo "O número na posição $position da sequência de Fibonacci é: $result";
?>