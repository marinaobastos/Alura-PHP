<?php
// Procura a posição de determinado carcatere dentro de uma string

$email = 'marina@alura.com.br';

// quero procurar dentro da variável email, o caractere @, a partir da posição 0
$posicaoArroba = strpos($email, '@', 0);

echo substr($email, 0, $posicaoArroba), PHP_EOL;
echo substr($email, $posicaoArroba); // da posição do arroba em diante

?>