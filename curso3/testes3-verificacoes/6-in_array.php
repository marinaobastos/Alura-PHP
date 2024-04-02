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
// caso 10 fosse uma string ele também encontraria

var_dump(in_array(10, $notas, true)); // strict
// caso 10 fosse uma string ele não encontraria, pois fez a verificação do terceiro igual (===),
// que compara o tipo

?>