<?php

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

// Remover um item
unset($contasCorrentes['123.456.789-11']);


    // echo "<ul>";
    // // Imprimindo o cpf, o titular e o saldo
    // foreach($contasCorrentes as $cpf => $conta) {
    //     exibeConta($conta);
    // }
    // echo "</ul>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>

</body>
</html>