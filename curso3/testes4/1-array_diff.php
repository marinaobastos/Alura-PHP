<?php 

// A função array_diff verifica se existe algum valor no primeiro array, que não tem no segundo,
// funciona como uma subtração de arrays 

$notasBimestre1 = [
    'João' => 8,
    'Maria' => 9,
    'Vinícius' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

$notasBimestre2 = [
    'João' => 8,
    'Maria' => 9,
    //'Vinícius' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

var_dump(array_diff($notasBimestre1, $notasBimestre2));

// O valor 6 só existe no primeiro array

?>