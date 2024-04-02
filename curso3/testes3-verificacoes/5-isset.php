<?php
// Verificar se um valor existe e se este é nulo ou não 

$notas = [
    'João' => 8,
    'Maria' => 9,
    'Vinícius' => null,
    'Roberto' => 7,
    'Ana' => 10
];

krsort($notas);
var_dump($notas);

echo 'Vinícius fez a prova: ', PHP_EOL;
var_dump(isset($notas['Vinícius']));

// Trata como se a chave nula não existisse

?>