<?php
// (Opcional) Experimente a declaração de um array associativo que mapeia a placa do carro
// (tipo string, por exemplo LMS-2312) para um carro. O carro também é um array associativo
// que possui uma marca (por exemplo, 'marca' -> 'vw') e o modelo (por exemplo, 'modelo' => 'Gol)

$carros = [

    'ABC-1234' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ],

    'FGH-4567' => [
        'marca' => 'Volkswagen',
        'modelo' => 'Golf'
    ],

    'LMN-2409' => [
        'marca' => 'Ford',
        'modelo' => 'Ecosport'
    ],
    
];

foreach($carros as $placa => $carro) {
    echo $placa . ': ' . $carro['marca'] . ' - ' . $carro['modelo'], PHP_EOL;
}


?>