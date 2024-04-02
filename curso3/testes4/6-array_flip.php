<?php 

$notasBimestre1 = [
    'João' => 8,
    'Maria' => 9,
    'Vinícius' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

$notasBimestre2 = [
    'João' => 6,
    'Roberto' => 7,
    'Ana' => 10
];

// Pegar os alunos faltantes
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump($alunosFaltantes);

// Inverte: chave vira valor e valor vira chave
var_dump(array_flip($alunosFaltantes));

?>