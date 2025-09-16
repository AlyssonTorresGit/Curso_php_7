<?php

ini_set('display_erros', 1);
error_reporting(E_ERROR);

function filtrarMensagem($errno, $errstring)
{
    $text = "include";
    $text = "by zero";
    return !!stripos(" $errstring", $text);
}
set_error_handler('filtrarMensagem', E_WARNING);

echo '<hr>';
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

echo '<hr>';
