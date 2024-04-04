<?php

$csv = '.,Marina Bastos,24,.';

echo trim($csv, '.,'), PHP_EOL; // remove da esquerda e direita
echo ltrim($csv, '.,'), PHP_EOL; // remove da esquerda 
echo rtrim($csv, ',.'); // remove da direita

// OBS.: não remove do meio 
?>