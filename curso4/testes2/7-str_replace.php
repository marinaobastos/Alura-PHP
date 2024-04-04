<?php

// str_replace = essa função trabalha com strings

$texto = 'Texto com qualquer coisa poxa e caramba.';
echo str_replace('poxa', '***', $texto), PHP_EOL;

$texto2 = 'Texto com qualquer coisa poxa e caramba.';
echo str_replace(
    ['poxa', 'caramba'],
    '***',
    $texto2
), PHP_EOL;

$texto3 = 'Texto com qualquer coisa poxa e caramba.';
echo str_replace(
    ['poxa', 'caramba'],
    ['***'], // apenas o poxa será substituído, o caramba será apagado
    $texto3
), PHP_EOL;

$texto4 = 'Texto com qualquer coisa poxa e caramba.';
echo str_replace(
    ['poxa', 'caramba'],
    ['p', 'c'], // apenas o poxa será substituído, o caramba será apagado
    $texto4
), PHP_EOL;

?>