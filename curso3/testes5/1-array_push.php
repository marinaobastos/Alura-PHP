<?php
// Adiciona no fim do array

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

// Adicionar elementos num array
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022 []= 'Luiz';

var_dump($alunos2022);

?>