<?php

// (Opcional) Experimente a declaração de uma lista de nomes (strings) de alunos, 
// como por exemplo, João, Maria, Pedro e Ana. Imprima os nomes através de uma estrutura 
// de repetição. Na declaração do array experimente utilizar array().

$nomes = array('João', 'Maria', 'Pedro', 'Ana');

for($i = 0; $i < count($nomes); ++$i) {
    echo $nomes[$i], PHP_EOL;
}

?>