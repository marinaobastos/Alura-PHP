<?php 

// A função array_diff_key verifica se existe alguma chave no primeiro array, que não tem no segundo,
// funciona como uma subtração de arrays 
// Diferença entre arrays utilizando as chaves, e não os valores

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

// A chave Vinícius não tem no segundo array

?>