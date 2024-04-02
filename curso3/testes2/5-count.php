<?php
// Count

$array = [
    1 => 'um', 
    2 => 'dois',
    3 => 'três'
];

foreach($array as $numeral => $nomeDoNumero) {
    echo "$numeral em português é: $nomeDoNumero.", PHP_EOL;
}

echo 'Total de itens no array: ' . count($array), PHP_EOL;

?>