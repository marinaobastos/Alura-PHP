<?php
// Explode

$nome = 'Marina Oliveira Bastos';
$email = 'marina@alura.com.br';
$senha = 'áéíóú';

// irá dividir a string $nome nos espaços em branco e retornará no máximo 2 elementos. 
// O segundo elemento conterá os dois últimos sobrenomes juntos.
// Você pode especificar o limite de elementos que o explode deve retornar.
$arrayNome = explode(' ', $nome, 2);

var_dump($arrayNome);

?>