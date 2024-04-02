<?php
// Spread operator

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

function funcao(int ...$alunos) {
    var_dump($alunos);
}

funcao(1, 2, 3, 45);

// Essa parte abaixo não funciona

function funcaoArrays($alunos2021, $novosAlunos, ...$final) {
    var_dump($final);
}

funcaoArrays($alunos2021, $novosAlunos);
?>