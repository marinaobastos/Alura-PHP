<?php
// Arrays associativos
$contaCorrente = [

    12345678910 => [
        'titular' => 'Marina',
        'saldo' => 10000
    ],

    12345678911 => [
        'titular' => 'Michele',
        'saldo' => 20000
    ],

    12345678912 => [
        'titular' => 'Manu',
        'saldo' => 120000
    ]
];

// Imprimindo o cpf, o titular e o saldo
foreach($contaCorrente as $cpf => $conta) {
    echo $cpf . ' => ' . $conta['titular'] . ' - R$' . $conta['saldo'], PHP_EOL;
}

?>