<?php

$array = [
    1 => 'um', 
    2 => 'dois',
    3 => 'três'
];

$i = 0;
foreach($array as $numeral => $nomeDoNumero) {
    echo "$numeral em português é: $nomeDoNumero.", PHP_EOL;
    ++$i;
}

echo "Total de itens no array: $i.", PHP_EOL;

?>