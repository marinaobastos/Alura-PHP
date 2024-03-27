<?php
// Ordenação utilizando as chaves / índices

$notas = [
    'ana' => 10, 
    'bia' => 8, 
    'leo' => 9, 
    'lua' => 6, 
    'mel' => 7];

    // Vai ordenar de forma alfabética decrescente
krsort($notas);
var_dump($notas);

// exite asort, rsort, arsort, 
?>