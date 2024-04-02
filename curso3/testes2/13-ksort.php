<?php

// Ordenar pela chave de forma crescente

$notas = [
    'João' => 8,
    'Maria' => 9,
    'Vinícius' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

ksort($notas);
var_dump($notas);

// Nesse caso ficarão em ordem alfabética, visto que as chaves são strings.

?>