<?php
// list[]

require_once 'funcoes.php';

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

// Letras maiúsculas
titularComLetraMaiuscula($contasCorrentes['123.456.789-12']);

/**
 * Resolução sem passagem por referência (passagem por valor/parâmetro):
 * 
 * $contasCorrentes['123.456.789-12'] = titularComLetraMaiuscula($contasCorrentes['123.456.789-12']);
*/

// Remover um item
unset($contasCorrentes['123.456.789-11']);


// Imprimindo o cpf, o titular e o saldo
foreach($contasCorrentes as $cpf => $conta) {
    // ['titular' => $titular, 'saldo' => $saldo] = $conta;
    list('titular' => $titular, 'saldo' => $saldo) = $conta;

    exibeMensagem("$cpf => $titular -> $saldo");
}


?>