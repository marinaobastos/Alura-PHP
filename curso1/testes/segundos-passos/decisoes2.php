<?php

echo 'Você só pode entrar se tiver a partir de 18 anos, ou a partir de 16 com acompanhante.', PHP_EOL, PHP_EOL;

$idade = 16;
$numero_acompanhantes = 3;

if($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho(a).";
} else if($idade >= 16 && $numero_acompanhantes > 1) {
    echo "Você tem $idade, mas está acompanhado(a). Pode entrar.";
} else {
    echo "Você tem apenas $idade anos. Não pode entrar.";
}

echo PHP_EOL, PHP_EOL;
echo "Tchauzinho!";

?>