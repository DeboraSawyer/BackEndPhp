<?php

//namespace App\model: Declaração da localização da classe.
namespace App\model;

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct($nome, $idade, $cargo)
    {
        // parent:: : Faz referência a classe pai.
        parent::__construct($nome, $idade);
        $this->cargo = $cargo;
    }

    public function  getCargo()
    {
        return $this->cargo;
    }
}