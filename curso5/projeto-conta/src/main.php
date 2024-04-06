<?php

require_once "Conta.php";

$umaConta = new Conta('123-123-123.12', 'Marina Bastos');
//var_dump($umaConta);
$umaConta->deposita(-10);
$segundaConta = new Conta('098.098.098-09', 'Vinícius Pinheiro');
//var_dump($umaConta);
// $terceiraConta = new Conta('678.678.678-67', 'Maria Lúcia');

echo Conta::totalDeContas(), PHP_EOL;

new Conta('678.678.678-00', 'Lúcia');

echo Conta::totalDeContas(), PHP_EOL;


?>