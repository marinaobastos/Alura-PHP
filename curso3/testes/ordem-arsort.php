<?php
// Ordenação utilizando os valores
// Ordenando sem que os índices sejam reordenados, ou seja, ele ordena os números 
// de forma decrescente, e não perde suas respectivas chaves (os nomes). Caso não 
// usasse o arsort ele perderia os nomes dos alunos e ordenaria com índices numéricos

$notas = [
    'ana' => 10, 
    'bia' => 8, 
    'leo' => 9, 
    'lua' => 6, 
    'mel' => 7];

arsort($notas);
var_dump($notas);

// exite asort, rsort, arsort, 
?>