<div class="titulo">Interface</div>

<?php
interface IAnimal
{
    function respirar();
}

interface ICanino extends IAnimal
{
    function latir(): string;
}

class Cachorro implements IAnimal, ICanino
{
    function respirar()
    {
        return "Irei usar oxigencio!";
    }
    function latir()
    {
        return 'Au Au';
    }
}
