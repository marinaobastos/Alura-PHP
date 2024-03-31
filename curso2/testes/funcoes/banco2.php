<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [

    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],

    '123.456.789-12' => [
        'titular' => 'Vinícius',
        'saldo' => 100
    ]
];


// Sacar dinheiro - Alberto
if(500 > $contasCorrentes['123.456.789-11']['saldo']) {
    exibeMensagem('Você não pode sacar este valor.');
} else {
    $contasCorrentes['123.456.789-11']['saldo'] -= 500;
}


// Imprimindo o cpf, o titular e o saldo
foreach($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . ' => ' . $conta['titular'] . ' - R$' . $conta['saldo']);
}

?>