<?php
// Arrays associativos
$contaCorrente = [

    '123.456.789-10' => [
        'titular' => 'Marina',
        'saldo' => 10000
    ],

    '123.456.789-11' => [
        'titular' => 'Michele',
        'saldo' => 20000
    ],

    '123.456.789-12' => [
        'titular' => 'Manu',
        'saldo' => 120000
    ]
];

// Adicionando mais um valor ao array
$contaCorrente[] = [
        'titular' => 'Caio',
        'saldo' => 14000,
];

// Adicionando mais um valor ao array
$contaCorrente['890.653.890-00'] = [
    'titular' => 'Gabriel',
    'saldo' => 230450,
];

// Imprimindo o cpf, o titular e o saldo
foreach($contaCorrente as $cpf => $conta) {
    echo $cpf . ' => ' . $conta['titular'] . ' - R$' . $conta['saldo'], PHP_EOL;
}

// o cpf de caio será o último incrementado (por coincidência coloquei antes eles em ordem)
// nesse caso como os cpfs viraram strings, o de caio será 0, porque é o primeiro inteiro que
// ele encontra, ele itera a partir de então

?>