<?php
// Quantos elementos tem em um array 

$a = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

$contador = 0;
foreach($a as $numeral_indice => $nome_numero) {
    echo $numeral_indice . ' em português é: ' . $nome_numero, PHP_EOL;
    ++$contador;
}

echo 'Total de elementos no array: ' . $contador, PHP_EOL;
echo 'Total de elementos no array: ' . count($a), PHP_EOL;
echo 'Total de elementos no array: ' . sizeof($a), PHP_EOL;

?>