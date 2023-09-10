<?php
    include_once __DIR__ . "/../vendor/autoload.php";
    use App\model\Pessoa;
    use App\model\Funcionario;
    use App\model\Professor;
    use App\model\Estudante;

    $funcionario = new Funcionario("Sophia", 25, "Secretária.");

    $professor1 = new Professor("Valkiria", 29, "Literatura.");
    $professor2 = new Professor("Lucas", 35, "Física.");

    $aluno1 = new Estudante("Amanda", 16, "27327.");
    $aluno2 = new Estudante("Gabriel", 16, "27328.");

    echo "Funcionário(a): {$funcionario->getNome()}, Idade: {$funcionario->getIdade()}, Cargo: {$funcionario->getCargo()}<br>";

    echo "Professor(a): {$professor1->getNome()}, Idade: {$professor1->getIdade()}, Disciplina: {$professor1->getDisciplina()}<br>";
    echo "Professor(a): {$professor2->getNome()}, Idade: {$professor2->getIdade()}, Disciplina: {$professor2->getDisciplina()}<br>";

    echo "Estudante: {$aluno1->getNome()}, Idade: {$aluno1->getIdade()}, Matrícula: {$aluno1->getMatricula()}<br>";
    echo "Estudante: {$aluno2->getNome()}, Idade: {$aluno2->getIdade()}, Matrícula: {$aluno2->getMatricula()}<br>";