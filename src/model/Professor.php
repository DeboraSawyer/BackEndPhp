<?php

//namespace App\model: Declaração da localização da classe.
namespace App\model;

class Professor extends Pessoa
{
    private $disciplina;

    public function __construct($nome, $idade, $disciplina)
    {
        // parent:: : Faz referência a classe pai.
        parent::__construct($nome, $idade);
        $this->disciplina = $disciplina;
    }

    public function  getDisciplina()
    {
        return $this->disciplina;
    }
}