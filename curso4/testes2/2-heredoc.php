<?php
// heredoc = equivalente a aspas duplas

function gerarEmail($nome): void {

    // HEREDOC
    $conteudoEmail = <<<DELIMITADOR
    Olá $nome!

    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}

    DELIMITADOR;

    echo $conteudoEmail;
}

gerarEmail('Marina');

?>