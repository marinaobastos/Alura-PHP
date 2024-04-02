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
];

$alunos2022 = $alunos2021 + $novosAlunos;
var_dump($alunos2022);

// Ele ignora os novos valores pois eles têm índices iguais, por exemplo: João e Patricia
// possuem o índice 0, então ele manterá o primeiro que tem este índice

?>