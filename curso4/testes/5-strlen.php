<?php

// Pega o tamanho da string em bytes
// caracteres com acentos precisam de dois bytes

$email = 'marina@alura.com.br';
$senha = '1234abcd678';

echo strlen($senha), PHP_EOL;

if(strlen($senha) <= 8) {
    echo 'Senha insegura.', PHP_EOL;
} else {
    echo 'Senha segura.', PHP_EOL;
}

echo str_repeat('-', 20), PHP_EOL;

// Funções multibyte

$email2 = 'manuella@alura.com.br';
$senha2 = 'áéíóú';

if(mb_strlen($senha2) <= 8) {
    echo 'Senha insegura.', PHP_EOL;
} else {
    echo 'Senha segura.', PHP_EOL;
}

?>