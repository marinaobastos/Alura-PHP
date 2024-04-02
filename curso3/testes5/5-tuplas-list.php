<?php
// List

$dados = ['Marina', 10, 22];

// Dar significado aos dados dispostos no array acima
list($nome, $nota, $idade) = $dados;
// ou [$nome, $nota, $idade] = $dados;

var_dump($nome, $nota, $idade);

?>