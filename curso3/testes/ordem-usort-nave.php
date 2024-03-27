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

// Ordenando da maior nota para a menor usando o operador de nave
function ordenaNotas(array $nota1, array $nota2):int {

    // Descrescente pois compara a segunda nota primeiro, nota2
    return $nota2['nota'] <=> $nota1['nota'];

    // Crescente pois compara a primeira nota com a segunda, nota1 primeiro
    // return $nota1['nota'] <=> $nota2['nota'];
}

usort($notas, 'ordenaNotas');
// var_dump($notas);
print_r($notas);

?>