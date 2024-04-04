<?php

$telefones = [
    '(22) 99999 - 9999',
    '(21) 99999 - 9999',
    '(24) 2222 - 2222'
];

foreach($telefones as $tel) {

    $telefoneValido = preg_match(
        '/^(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/', // regex - expressões regulares
        $tel,
        $correspondencia
    );

    var_dump($correspondencia);
    echo $correspondencia[0], PHP_EOL;
    echo $correspondencia[1], PHP_EOL;
    //echo $correspondencia[2], PHP_EOL; - não existe segunda chave nesse array

    if($telefoneValido) {
        echo 'Telefone válido.', PHP_EOL, PHP_EOL;
    } else {
        echo 'Telefone inválido.', PHP_EOL, PHP_EOL;
    }

}

?>