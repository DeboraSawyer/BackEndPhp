<?php

//namespace App\model: Declaração da localização da classe.
namespace App\model;

class Estudante extends Pessoa
{
    private $matricula;

    public function __construct($nome, $idade, $matricula)
    {
        // parent:: : Faz referência a classe pai.
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
    }

    public function  getMatricula()
    {
        return $this->matricula;
    }
}