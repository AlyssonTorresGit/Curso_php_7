<div class="titulo">Primeira Classe</div>
<?php

class Cliente
{
    public $nome =  'Anônimo';
    public $idade = 18;
    function apresentar()
    {
        echo "NOme: {$this->nome}<br>";
        echo "idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();

$c1->apresentar();


class Data
{
    public $dia = 01;
    public $mes = 'Janeiro';
    public $ano = 1970;

    function Apresentar()
    {
        echo "Data:{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data = new Data();
$data->Apresentar();
