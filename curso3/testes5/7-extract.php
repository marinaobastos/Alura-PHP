<?php
// Extract

$dados = [
    'nome' => 'Marina',
    'nota' => 10, 
    'idade' => 22
];

// list('nome' => $nome, 'nota' => $nota, 'idade' => $idade) = $dados;

// Pega as chaves do array e transforma elas em variáveis
extract($dados);

var_dump($nome, $nota, $idade);

?>