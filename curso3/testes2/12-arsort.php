<?php

// Ordena de forma decrescente e mantém as chaves associadas

$notas = [10, 6, 8, 9, 7];

arsort($notas);
var_dump($notas);

echo PHP_EOL, PHP_EOL;

$alunos = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinícius' => 6
];

arsort($alunos);
var_dump($alunos);

?>