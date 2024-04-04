<?php
// str_replace = essa função trabalha com caracteres

$texto = 'Texto com qualquer coisa poxa e caramba.';
echo strtr($texto, 'poxa', '***'), PHP_EOL;

$texto2 = 'Texto com qualquer coisa poxa e caramba.';
echo strtr($texto2, 'poxa', '***@'), PHP_EOL;

$texto = 'Texto com qualquer coisa poxa e caramba.';
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']), PHP_EOL;

?>