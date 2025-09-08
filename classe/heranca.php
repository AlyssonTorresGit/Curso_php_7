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
class Usuario extends Pessoa
{
    public $login;
    function __construct($nome, $idade, $login)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login
        echo 'Usuario Criado! <br>';
    }
    function __destruct()
    {
        echo "Usuario diz: tchau!<br>";
    }
    public function apresentar()
    {

        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$usuario = new usuario('gustavo', 20, 'gust');
$usuario->apresentar();