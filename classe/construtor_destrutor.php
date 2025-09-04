<div class="ti">Destrutor e destrutor</div>
<?php 

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18){
        echo 'Construtor invocado!' <br>;
        $this->nome = $novoNone;
        $this->idade = $idade;
    }
    function __destruct() {
        echo 'E morreu!<br>';
        }
    Public function apresentar(){
        echo "{$this->nome},{$this->idade} anos<br> ";
    }
}
 $pessoaA = new Pessoa('Maria Alice', 2);
 $pessoaA->apresentar();
 unset($pessoaA);

 $pessoaB = new Pessoa('Alysson', 34);
 $pessoaB->apresentar();
 $pessoaB = null;
 unset($pessoaB);
 