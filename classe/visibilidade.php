<div class="titulo">visibilidade</div>

<?php
class a
{
    public $publico = 'publico';
    protected $protegido = 'protegido';
    private $privete = 'privado';

    public function mostraA()
    {
        echo "class A) publico = {$this->publico}<br>";
        echo "class A) Protegido = {$this->publico}<br>";
        echo "class A) Privado = {$this->publico}<br>";
    }
    private function naoMostrar()
    {
        echo 'não vou imprimir';
    }
}

$a = new A();
$a->mostraA();

class B extends A {}
