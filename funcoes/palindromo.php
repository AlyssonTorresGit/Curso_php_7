<div class="titulo">desafio Palindromo</div>
<?php
function palindromo($palavra)
{
    $ultimoIndice = strlen($palavra) - 1;
    for ($i = 0; $i <= $ultimoIndice; $i++) {
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Nao';
        }
    }
    return "Sim";
}

echo palindromo('arara') . ' ';
echo palindromo('polo') . ' ';
echo '<br>';

function palindromoSimples($palavra)
{
    return $palavra === strrev($palavra) ?  'sim' : 'não';
}

echo palindromo('arara') . ' ';
echo palindromo('polo') . ' ';
echo '<br>';

?>