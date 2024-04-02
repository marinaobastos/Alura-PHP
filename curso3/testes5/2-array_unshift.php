<?php
// Adiciona no início do array

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

// Adciona elementos no início do array
array_unshift($alunos2022, 'Marina', 'Luiza');

var_dump($alunos2022);

?>