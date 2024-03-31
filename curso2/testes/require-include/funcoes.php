<?php

// Subrotina escreve mensagem
function exibeMensagem(String $mensagem): void {
    echo $mensagem . PHP_EOL;
}

// Função Sacar
function sacar(array $conta, float $valorASacar): array {

    if($valorASacar > $conta['saldo']) {
        exibeMensagem($conta['titular'] . ' não pode sacar ' . $valorASacar . ' reais.');
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

// Função Depositar
function depositar(array $conta, float $valorADepositar): array {
    
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem('Os depósitos precisam ser positivos.');
    }

    return $conta;
}

// Passagem por referência
function titularComLetraMaiuscula(&$conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

/**
 * Resolução sem passagem por referência (passagem por valor/parâmetro):
 * 
 * function titularComLetraMaiuscula( $conta) {
 *   $conta['titular'] = mb_strtoupper($conta['titular']);
 *   return $conta;
 * }
 * 
*/

?>