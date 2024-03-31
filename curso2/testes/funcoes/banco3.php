<?php

// Subrotina
function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

// Função
function sacar($conta, $valorASacar) {

    if($valorASacar > $conta['saldo']) {
        exibeMensagem($conta['titular'] . ' não pode sacar ' . $valorASacar . ' reais.');
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
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

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);

// Imprimindo o cpf, o titular e o saldo
foreach($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . ' => ' . $conta['titular'] . ' - R$' . $conta['saldo']);
}

?>