<?php
// Sort - ordenando um array de maneira crescente

$notas = [
    10,
    2,
    8,
    6,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Desordenadas: ', PHP_EOL;
var_dump($notas);

echo PHP_EOL, 'Ordenadas: ', PHP_EOL;
var_dump($notasOrdenadas);


?>