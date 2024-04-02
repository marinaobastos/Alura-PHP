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

// Imprime as chaves dos alunos que faltaram (chaves nesse caso são os nomes dos alunos)
var_dump(array_keys($alunosFaltantes));

// Imprime os valores dos alunos que faltaram (valor nesse caso é a nota de cada aluno)
var_dump(array_values($alunosFaltantes));

?>