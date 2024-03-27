<?php
$a = [1, 2, 3];

// aqui o $i só entra até ter o valor 2, quando soma em 3 sai do laço de repetição
for($i = 0; $i < count($a); ++$i) {
    echo $a[$i], PHP_EOL;
}

echo 'Total elementos: ' . count($a);
// 1
// 2
// 3
?>