<?php
// Encontrar uma string dentro de outra maior, ou seja, uma substring

$email = 'marina@alura.com.br';

// a partir da posição 0 pega 5 caracteres
echo 'Nome: ' . substr($email, 0, 6), PHP_EOL;
// a partir da posição 6 pega todo o resto da string, até o final
echo 'Domínio: '. substr($email, 6), PHP_EOL;

?>