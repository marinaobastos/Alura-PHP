<?php

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
    'Quinto nome',
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = $alunos2021 + $novosAlunos;
var_dump($alunos2022);

// Na segunda vez em que Patricia aparece, seu índice já é 5, o que não tem no primeiro array, 
// então a partir dela os outros elementos serão adicionados

?>