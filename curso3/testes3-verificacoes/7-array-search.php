<?php
// Ignora as chaves e somente procura se um determinado valor existe dentro deste array

$notas = [
    'João' => 8,
    'Maria' => 9,
    'Vinícius' => null,
    'Roberto' => 7,
    'Ana' => 10
];

krsort($notas);
var_dump($notas);

echo 'Alguém tirou 10?', PHP_EOL;
var_dump(in_array(10, $notas));

echo 'Quem tioru 10?', PHP_EOL;
var_dump(array_search(10, $notas));
// OU echo array_search(10, $notas);
// também é possível passar o true (===)

// array_search() = retorna inteiro, string e booleano.

?>