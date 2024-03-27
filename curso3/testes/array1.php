<?php

// no arrays as chaves só podem ser representadas por inteiros ou strings

$array = [
    1 => 'um',
    true => 'dois',
    1.9 => 'tres'
    // ele converte todos esse valores para 1, ele vai sobrescrevendo
];

var_dump($array);

// Array associativo: aquele que definimos as chaves (inteiro ou string)
?>