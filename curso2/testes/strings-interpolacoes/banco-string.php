<?php

// Subrotina
function exibeMensagem(String $mensagem): void {
    echo $mensagem . PHP_EOL;
}

// Função Sacar
function sacar(array $conta, float $valorASacar): array {

    if($valorASacar > $conta['saldo']) {
        exibeMensagem($conta['titular'] . ' não pode sacar ' . $valorASacar . ' reais.');
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

// Função Depositar
function depositar(array $conta, float $valorADepositar): array {
    
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem('Os depósitos precisam ser positivos.');
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

// Saques
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 200);

// Depósitos
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 900);
// $contasCorrentes['123.456.789-11'] = depositar($contasCorrentes['123.456.789-11'], -500);

// Imprimindo o cpf, o titular e o saldo
foreach($contasCorrentes as $cpf => $conta) {
    // exibeMensagem($cpf . ' => ' . $conta['titular'] . ' - R$' . $conta['saldo']);
    // exibeMensagem("$cpf => $conta[titular] - $conta[saldo].");  -  forma simples
    exibeMensagem("$cpf => {$conta['titular']} - {$conta['saldo']}.");  //  forma complexa

}

?>