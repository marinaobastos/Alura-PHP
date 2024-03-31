<?php
// (Opcional) Experimente a declaração de um array associativo que mapeia a placa do carro
// (tipo string, por exemplo LMS-2312) para um carro. O carro também é um array associativo
// que possui uma marca (por exemplo, 'marca' -> 'vw') e o modelo (por exemplo, 'modelo' => 'Gol)

$automoveis = [

    'carro1' => [
        'placa' => 'ABC-1234',
        'marca' => 'Fiat',
        'modelo' => 'uno'
    ],

    'carro2' => [
        'placa' => 'FGH-4567',
        'marca' => 'Volkswagen',
        'modelo' => 'Golf'
    ],

    'carro3' => [
        'placa' => 'LMN-2409',
        'marca' => 'Ford',
        'modelo' => 'Ecosport'
    ],
    
];

foreach($automoveis as $carros => $infos) {
    echo $carros['placa'] . ' - ' . $carros['marca'] . ' - ' . $carros['modelo'], PHP_EOL;
}


?>