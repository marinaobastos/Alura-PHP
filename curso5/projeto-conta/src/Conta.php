<?php

class Conta {

//================================================== ATRIBUTOS ========================================================

    // public $cpfTitular;
    // public $nomeTitular;
    // public $saldo = 0;

    // Atributos das instâncias criadas a partir da classe
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;

    // Atributo da classe, não da instância de uma classe
    public static $numeroDeContas = 0;

//===================================== CONSTRUTOR E DESTRUTOR  =======================================================

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        // Saldo é inicializado com valor zero
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

    public function getCPFTitular() {
        return $this->cpfTitular;
    }

    // Não precisa mais pois já é solicitado na criação da conta
    // public function setCPFTitular($cpf) {
    //     $this->cpfTitular = $cpf;
    // }

    public function getNomeTitular() {
        return $this->nomeTitular;
    }

    // Não precisa mais pois já é solicitado na criação da conta
    // public function setNomeTitular($nome) {
    //     $this->nomeTitular = $nome;
    // }

    public function getSaldo() {
        return $this->saldo;
    }


//============================================== VALIDAÇÕES ============================================================

    private function validaNomeTitular(string $nomeTitular) {

        if(strlen($nomeTitular) < 5) {
            echo 'O nome precisa ter pelo menos 5 caracteres.', PHP_EOL;
            exit();
        }
    }

}


?>