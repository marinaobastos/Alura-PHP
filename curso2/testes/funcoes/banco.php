<?php
// Arrays associativos
$contasCorrentes = [

    '123.456.789-10' => [
        'titular' => 'Marina',
        'saldo' => 100
    ],

    '123.456.789-11' => [
        'titular' => 'Michele',
        'saldo' => 200
    ],

    '123.456.789-12' => [
        'titular' => 'Manu',
        'saldo' => 1000
    ]
];


// Sacar dinheiro - Marina
$contasCorrentes['123.456.789-10']['saldo'] -= 500;

// Sacar dinheiro - Michele
if(500 > $contasCorrentes['123.456.789-11']['saldo']) {
    echo 'Você não pode sacar este valor.', PHP_EOL;
} else {
    $contasCorrentes['123.456.789-11']['saldo'] -= 500;
}

// Sacar dinheiro - Manu
if(500 > $contasCorrentes['123.456.789-12']['saldo']) {
    echo 'Você não pode sacar este valor.', PHP_EOL;
} else {
    $contasCorrentes['123.456.789-12']['saldo'] -= 500;
}


// Imprimindo o cpf, o titular e o saldo
foreach($contasCorrentes as $cpf => $conta) {
    echo $cpf . ' => ' . $conta['titular'] . ' - R$' . $conta['saldo'], PHP_EOL;
}

?>