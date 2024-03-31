<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18, 79];

// Percorrendo um array 
for($i = 0; $i < 3; ++$i) {
    echo $idadeList[$i], PHP_EOL;
}

echo PHP_EOL;

// Percorrendo um array com count
for($i = 0; $i < count($idadeList); ++$i) {
    echo $idadeList[$i], PHP_EOL;
}

// Adicionando mais um número ao array 
$idadeList[count($idadeList)] = 20;
$idadeList []= 22;

echo PHP_EOL;
var_dump($idadeList);

?>