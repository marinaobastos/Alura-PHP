<?php

$url = 'https://alura.com.br';

// verifica se uma string começa com determinados caracteres
if(str_starts_with($url, 'https')) {
    echo 'É uma url segura.';
} else {
    echo 'Não é uma url segura.';
}

echo PHP_EOL;

// verifica se uma string termina com determinados caracteres
if(str_ends_with($url, '.br')) {
    echo 'É um domínio do Brasil.';
} else {
    echo 'Não é um domínio do Brasil.';
}

echo PHP_EOL;

?>