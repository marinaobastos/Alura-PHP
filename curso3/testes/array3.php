<?php

$a = [
    0 => 'um',
    1 => 'dois',
    2 => 'tres'
];

foreach($a as $numeral_indice => $nome_numero) {
    echo $numeral_indice . ' é o índice/chave do valor ' . $nome_numero, PHP_EOL;
}

?>