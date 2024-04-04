<?php

$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello.", $trans), PHP_EOL;

echo str_replace(['hello', 'hi'], ['hi', 'hello'], "hi all, I said hello."), PHP_EOL;

echo 'Vinícius', PHP_EOL;
echo strtr('Vinícius', 'í', 'i'), PHP_EOL;

?>