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
$contaCorrente = [$conta1, $conta2, $conta3];

// Imprime titular e saldo
for($i = 0; $i < count($contaCorrente); ++$i) {
    echo $contaCorrente[$i]['titular'] . ' possui R$' . $contaCorrente[$i]['saldo'] . 
    ' reais de saldo.', PHP_EOL;
}

?>