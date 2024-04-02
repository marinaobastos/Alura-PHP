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

// Pega as chaves dos alunos que faltaram (chaves nesse caso são os nomes dos alunos)
$nomeAlunos = (array_keys($alunosFaltantes));

// Pega os valores dos alunos que faltaram (valor nesse caso é a nota de cada aluno)
$notasAlunos = (array_values($alunosFaltantes));

// Combinar os arrays, fazendo com que a chave seja a nota e o valor seja o nome (invertendo a ordem original)
var_dump(array_combine($notasAlunos, $nomeAlunos));
// caso os arrays combinados não tenham o mesmo tamanho dará erro!!!

?>