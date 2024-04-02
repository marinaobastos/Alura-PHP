<?php
// Remove o último elemento do array 

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

array_shift($alunos2022);

// Remove o último elemento de um array
array_pop($alunos2022);

var_dump($alunos2022);

?>