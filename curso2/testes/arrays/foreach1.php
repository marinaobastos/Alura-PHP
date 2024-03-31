<?php

// Arrays associativos
$conta1 = [
    'titular' => 'Marina',
    'saldo' => 10000
];

$conta2 = [
    'titular' => 'Michele',
    'saldo' => 20000
];

$conta3 = [
    'titular' => 'Manu',
    'saldo' => 120000
];

// Um array de arrays
$contaCorrente = [
    0 => $conta1,
    1 => $conta2,
    2 => $conta3
];

foreach($contaCorrente as $conta) {
    echo $conta['titular'], PHP_EOL;
}

?>