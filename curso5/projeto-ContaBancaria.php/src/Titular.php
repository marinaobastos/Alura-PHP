<?php

class Titular {

    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome) {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

//===================================== GETTERS AND SETTERS =========================================================

    public function recuperaCPF() {
        return $this->cpf->getCPF();
    }

    public function getNome() {
        return $this->nome;
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