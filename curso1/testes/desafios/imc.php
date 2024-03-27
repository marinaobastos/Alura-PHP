<?php
// imc

$peso = 65;
$altura = 1.60;

$imc = $peso / ($altura * $altura);

echo "Seu IMC é $imc.\n";

if($imc < 18) {
    echo 'Abaixo do peso.';

} else if(18 < $imc && $imc < 24) {
    echo 'Peso normal.';

} else if(25 < $imc && $imc < 29) {
    echo 'Acima do peso.';
}


?>