<?php

$idade = 22;

echo 'Você só pode entrar se tiver a partir de 18 anos.', PHP_EOL, PHP_EOL;

if($idade >= 18) {
    echo "Você tem $idade anos.", PHP_EOL;
    echo 'Pode entrar!';
} else {
    echo "Você tem $idade anos.", PHP_EOL;
    echo 'Não pode entrar.';
}

echo PHP_EOL;
echo 'Tchauzinho!';

?>