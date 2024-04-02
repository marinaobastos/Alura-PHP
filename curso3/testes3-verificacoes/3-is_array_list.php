<?php
// Verifica se os índices de um array são todos numéricos sequenciais:
    // é numérico: return true
    // não é numérico: return false

$notas = [
    'João' => 8,
    'Maria' => 9,
    'Vinícius' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

krsort($notas);
var_dump($notas);

echo PHP_EOL, gettype($notas), PHP_EOL;

if(is_array($notas)) {
    echo PHP_EOL, 'Sim, é um array.', PHP_EOL;
}

var_dump(array_is_list($notas));

?>