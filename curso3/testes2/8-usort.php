<?php
// usort

// negativo => se a primeiro elemento precisar vir primeiro na lista
// zero => se não importar a ordem
// positivo => se o primeiro elemento precisar vir depois na lista ordenada

// Ordenar de forma decrescente

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

    if($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0;
}

usort($notas, 'ordenaNotas');
// var_dump($notas);
print_r($notas); 

?>