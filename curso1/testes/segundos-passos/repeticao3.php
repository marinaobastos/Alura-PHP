<?php
// Pulando uma condição com continue

for($contador = 0; $contador <= 15; ++$contador) {

    if($contador == 13) {
        continue;
    }

    echo $contador, PHP_EOL;
}

echo PHP_EOL, PHP_EOL, PHP_EOL;

// break, condição que quebra o loop

for($i = 100; $i > 0; --$i) {

    if($i == 83) {
        break;
    }

    echo $i, PHP_EOL;
}

?>