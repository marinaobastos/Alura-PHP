<?php
// Remove o primeiro elemento do array e o reordena se suas chaves forem numéricas, caso contrário não reordena

$alunos2021 = [
    'João',
    'Maria',
    'Vinícius',
    'Roberto',
    'Ana',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = [...$alunos2021, 'Carlos', ...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022 []= 'Luiz';

array_unshift($alunos2022, 'Marina', 'Luiza');

// Remove o primeiro elemento de um array
array_shift($alunos2022);

var_dump($alunos2022);

?>