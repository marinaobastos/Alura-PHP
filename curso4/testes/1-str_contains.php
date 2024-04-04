<?php
// Verificar se existe determinada string dentro de outra string

$nome = 'Marina Bastos';

$eDaMinhaFamilia = str_contains($nome, 'Bastos');

if($eDaMinhaFamilia) {
    echo "$nome possui o sobrenome da minha família.", PHP_EOL;
} else {
    echo "$nome não possui o sobrenome da minha família.", PHP_EOL;
}

?>