<?php

class Conta {

//================================================== ATRIBUTOS ========================================================

    private $titular;
    private $saldo = 0;
    public static $numeroDeContas = 0;

//===================================== CONSTRUTOR E DESTRUTOR  =======================================================

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }


    public function __destruct()
    {
        self::$numeroDeContas--;
        echo 'Destrui uma conta', PHP_EOL;
    }

//================================================ MÉTODOS ===========================================================

    // Uma função dentro de uma classe é chamada de método

    // Função sacar 
    public function saca(float $valorASacar): void {

        if($valorASacar > $this->saldo) {
            echo 'Saldo indisponível.', PHP_EOL;
            return;
        }
            
        $this->saldo -= $valorASacar;
    }


    // Função depositar
    public function deposita(float $valorADepositar): void {

        if($valorADepositar < 0) {
            echo 'O depósito deve ser um valor positivo.', PHP_EOL;
        } 
        
        $this->saldo += $valorADepositar;
    }


    // Função tranferir
    public function transfere(float $valorATransferir, Conta $contaDestino) {

        if($valorATransferir > $this->saldo) {
            echo 'Saldo indisponível.', PHP_EOL;
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    
    // Função que retorna o total de contas criadas
    public static function totalDeContas(): int {
        return self::$numeroDeContas;
    }

//===================================== GETTERS AND SETTERS =========================================================

    // Getters and setters 

    public function getSaldo() {
        return $this->saldo;
    }


    public function recuperaNomeTitular(): string {
        return $this->titular->getNome();
    }


    public function recuperaCPFTitular(): string {
        return $this->titular->recuperaCPF();
    }


//============================================== VALIDAÇÕES ============================================================



}


?>