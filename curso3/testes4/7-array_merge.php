<?php
// Juntar arrays
// Não preserva as chaves dos arrays que são mesclados, as chaves numéricas são reorganizadas
// As chaves em strings, serão sobrescritas do último array mesclado para as demais. A última 
// chave vai sobrescrever a anterior / o valor original
// Adiciona o novo array ao final do primeiro passado nos parênteses

$alunos2021 = [
    0 => 'João',
    'Maria',
    'Vinícius',
    'Roberto',
    'Ana',
];

$novosAlunos = [
    0 => 'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);

?>