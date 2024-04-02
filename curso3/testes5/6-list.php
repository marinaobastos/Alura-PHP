<?php
// List

$dados = [
    'nome' => 'Marina',
    'nota' => 10, 
    'idade' => 22
];

// Dar significado aos dados dispostos no array acima
list('nome' => $nome, 'nota' => $nota, 'idade' => $idade) = $dados;

var_dump($nome, $nota, $idade);

?>