<?php

$a = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

foreach($a as $numeral_indice => $nome_numero) {
    echo $numeral_indice . ' em português é: ' . $nome_numero, PHP_EOL;
}

?>