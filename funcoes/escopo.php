<div class="titulo">Função e Escopo</div>
<?php
function imprimeMensagens()
{
    echo "ola";
    echo "Ate a proxima<br>";
}

imprimeMensagens();

$variavek = 1;

function trocarValor()
{
    $variavel = 2;
    echo "durate a função: $variavel <br>";
}

echo "antes $variavel <br>";
trocarValor();
echo "depois $variavel <br>";


?>