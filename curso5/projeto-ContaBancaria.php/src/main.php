<?php

require_once "Conta.php";
require_once "Titular.php";
require_once "CPF.php";

// $marina = new Titular('123-456-789-10', 'Marina Bastos');
// $primeiraConta = new Conta($marina);

// $vinicius = new Titular('098.765.432-11', 'Vinícius Pinheiro');
// $segundaConta = new Conta($vinicius);


// echo $primeiraConta->recuperaNomeTitular(), PHP_EOL;
// echo $primeiraConta->recuperaCPFTitular(), PHP_EOL;

// echo $segundaConta->recuperaNomeTitular(), PHP_EOL;
// echo $segundaConta->recuperaCPFTitular(), PHP_EOL;

// ====================================================================================

$marina = new Titular(new CPF('123.456.789-10'), 'Marina Bastos');
$primeiraConta = new Conta($marina);
$primeiraConta->deposita(500);
$primeiraConta->saca(200);

echo $primeiraConta->recuperaNomeTitular(), PHP_EOL;
echo $primeiraConta->recuperaCPFTitular(), PHP_EOL;
echo $primeiraConta->getSaldo(), PHP_EOL;

echo PHP_EOL;

$vinicius = new Titular(new CPF('098.765.432-11'), 'Vinícius Pinheiro');
$segundaConta = new Conta($vinicius);
$segundaConta->deposita(100);
$segundaConta->saca(200);

echo $segundaConta->recuperaNomeTitular(), PHP_EOL;
echo $segundaConta->recuperaCPFTitular(), PHP_EOL;
echo $segundaConta->getSaldo(), PHP_EOL;

?>