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

$contaCorrente = [
    12345678910 => $conta1,
    12345678911 => $conta2,
    12345678912 => $conta3
];

// Imprimindo a cpf
foreach($contaCorrente as $cpf => $conta) {
    echo '----- CPF -----', PHP_EOL, $cpf, PHP_EOL;
}

?>