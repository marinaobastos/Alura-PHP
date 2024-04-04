<?php
// Strings numéricas

$anoNascimento = '1997'; // o php converte está string que só contém números para uma string numérica

// logo, ele faz a conversão de tipo e consegue realizar uma comta, por exemplo, usando este valor
$idade = 2024 - $anoNascimento; 

if($anoNascimento == 1997) {
    echo 'SIM.';
} else {
    echo 'NÃO.';
}

?>