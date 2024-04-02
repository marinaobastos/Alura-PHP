<?php 

// A função array_diff_assoc verifica se existe alguma chave e valor em um array
// que não exista no outro

$notasBimestre1 = [
    'João' => 8,
    'Maria' => 9,
    'Vinícius' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

$notasBimestre2 = [
    'João' => 6,
    'Maria' => 9,
    'Vinícius' => 9,
    'Roberto' => 7,
    'Ana' => 10
];

var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

// É possível ver as diferenças tanto na chave quanto no valor

?>