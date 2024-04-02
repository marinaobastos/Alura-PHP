<?php
// Operador de nave espacial

// negativo => se a primeiro elemento precisar vir primeiro na lista
// zero => se não importar a ordem
// positivo => se o primeiro elemento precisar vir depois na lista ordenada

$notas = [

    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinícius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int {

    // crescente
    // return $nota1['nota'] <=> $nota2['nota'];

    // decrescente 
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
// var_dump($notas);
print_r($notas); 

?>