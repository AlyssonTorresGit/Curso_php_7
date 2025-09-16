<div class="titulo">desafio</div>
<?php

namespace erros\desafio;

class NaoInteriroException extends \Exception {}

function intdiv($a, $b)
{
    if ($b == 0) {
        throw new \DivisionByZeroError();
    }
    if ($a % $b > 0) {
        throw new NaoInteriroException();
    }
    return $A / $b;
}
