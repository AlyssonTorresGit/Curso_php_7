<div class="titulo">erro personalizados</div>

<?php
class FaixaEtariaException extends Exception
{
    public function __construct(string $message, int $code = 0, $previous = null)
    {
        echo "Erro personalizado: $message<br>";
        parent::__construct(
            $message,
            $code,
            $previous
        );
    }
}
function calcularTempoAposentadoria($idade)
{
    if ($idade < 18) {
        throw new FaixaEtariaException(
            "Ainda estar muito longe"
        );
    }
    if ($idade > 70) {
        throw new FaixaEtariaException(
            'Já deveria estar aponsentado'
        );
    }
    return 70 - $idade;
}
$idadeAvaliadas = [15, 30, 60, 80];

foreach ($idadeAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "idade: $idade, $tempoRestante anos restantes<br>";
    } catch (FaixaEtariaException $e) {
        echo "não foi possivel calcular para $idade anos.<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}

echo 'FIM';
