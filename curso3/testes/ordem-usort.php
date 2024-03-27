<?php
// Ordenar um array usando usort(array, função) => que recebe um array, uma função e retorna um inteiro

$notas =[
    [
        'aluno' => 'Marina',
        'nota' => 8,
    ],
    [
        'aluno' => 'Manu',
        'nota' => 9,
    ],
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
];

// Ordenando da maior nota para a menor
function ordenaNotas(array $nota1, array $nota2):int {

    if($nota1['nota'] > $nota2['nota']) {
        return -1;
        // joga para frente - primeiro elemento vem primeiro - nota1 vem antes de nota2
    }

    if($nota2['nota'] > $nota1['nota']) {
        return 1;
        // joga para trás - segundo elemento vem antes - informa que o segundo elemento nota2 deve vir primeiro
    }

    return 0;
    // tanto faz, são iguais
}

usort($notas, 'ordenaNotas');
var_dump($notas);


?>