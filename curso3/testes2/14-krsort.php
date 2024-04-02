<?php

// Ordenar pela chave de forma decrescente

$notas = [
    'João' => 8,
    'Maria' => 9,
    'Vinícius' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

krsort($notas);
var_dump($notas);

// Nesse caso ficarão em ordem alfabética descrescente, visto que as chaves são strings.

?>