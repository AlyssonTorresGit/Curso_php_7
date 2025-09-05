<div class="titulo">Herança</div>

<?php




class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }
    function __destruct()
    {
        echo "tchau! <br>";
    }
    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}
class Usuario extends Pessoa {}
