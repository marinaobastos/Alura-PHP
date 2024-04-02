<?php
// Verificar se uma determinada chave existe

$notas = [
    'João' => 8,
    'Maria' => null,
    'Vinícius' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

krsort($notas);
var_dump($notas);

echo 'Maria fez a prova: ', PHP_EOL;
var_dump(array_key_exists('Maria', $notas));

// Sabe que a chave existe mas é nula

?>