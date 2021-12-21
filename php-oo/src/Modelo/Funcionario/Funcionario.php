<?php

namespace Alura\Banco\Modelo\Funcionario;

require_once 'autoload.php';
use Alura\Banco\Modelo\{CPF, Pessoa};


abstract class Funcionario extends Pessoa
{

    private float $salario;



    public function __construct($nome, $cpf, $salario)
    {   
        parent :: __construct($nome, $cpf);
        $this -> salario = $salario;
    }

    public function alteraNome(): void
    {
        $this -> validaNomeTitular($nome);
        $this -> nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this -> salario;
    }

    abstract public function calculaBonificacao();
}