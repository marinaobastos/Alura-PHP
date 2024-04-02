<?php
// Operador de unpacking
// Funciona como o array_merge
// É possível adicionar novos valores também

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
var_dump($alunos2022);

// Carlos aparece depois de Ana e antes de Patricia
?>