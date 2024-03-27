<?php
// Tabuada

$multiplicador = 9;
$i = 0;

echo "+++ TABUADA DE $multiplicador +++\n\n";

while($i <= 10) {
    echo "$multiplicador x $i = " . ($multiplicador * $i) , PHP_EOL;
    ++$i;
}

?>