<?php

$telefones = [
    '(22) 99999 - 9999',
    '(21) 98888 - 8888',
    '(24) 2222 - 2222'
];

foreach($telefones as $tel) {

    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

    $telefoneValido = preg_match(
        $regex, // regex - expressões regulares
        $tel,
        $correspondencia
    );

    // var_dump($correspondencia);
    //echo $correspondencia[0], PHP_EOL;
    //echo $correspondencia[1], PHP_EOL;

    if($telefoneValido) {
        echo 'Telefone válido.', PHP_EOL;
    } else {
        echo 'Telefone inválido.', PHP_EOL;
    }

    echo preg_replace(
        $regex,
        '(XX) \2',
        $tel
    ) , PHP_EOL;

}

?>