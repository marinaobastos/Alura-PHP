<?php
// nowdoc = equivalente as aspas simples
// ignora as variáveis

function gerarEmail($nome): void {

    // NOWDOC
    // dessa forma ele não pega a string dentro dos delimitadores
    $conteudoEmail = <<<'DELIMITADOR'
    Olá $nome!

    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}

    DELIMITADOR;

    echo $conteudoEmail;
}

gerarEmail('Marina');

?>