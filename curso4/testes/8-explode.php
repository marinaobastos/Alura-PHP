<?php
// Explode

$nome = 'Marina Oliveira Bastos';
$email = 'marina@alura.com.br';
$senha = 'áéíóú';

$arrayNome = explode(' ', $nome,);

var_dump($arrayNome);

//=============================================================

echo str_repeat('-', 20), PHP_EOL;

//=============================================================

list($primeiroNome, $sobrenome1, $sobrenome2) = explode(' ', $nome); // Marina Oliveira Bastos

echo 'Nome: ' . $primeiroNome, PHP_EOL;
echo 'Sobrenome: ' . $sobrenome1, PHP_EOL;
echo 'Último sobrenome: ' . $sobrenome2, PHP_EOL;

?>