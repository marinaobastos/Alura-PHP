<?php
// Compact - cria um novo array

$dados = [
    'nome' => 'Marina',
    'nota' => 10, 
    'idade' => 22
];

// Pega as chaves do array e transforma elas em variáveis
extract($dados);
var_dump($nome, $nota, $idade);
echo PHP_EOL;

// Transforma variáveis em chaves de array, e seus valores serão aqueles que estavam
// armazenados na variável
$info = compact('nome', 'nota', 'idade');
var_dump($info);

?>