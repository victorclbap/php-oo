<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa 
{   
    protected string $nome;  
    protected CPF $cpf;


    public function __construct(string $nome, CPF $cpf)
    {   
        $this -> validaNomeTitular($nome);
        $this -> nome = $nome;
        $this -> cpf = $cpf;
    }

    public function recuperaCpf ()
    {
        return $this -> cpf -> recuperaNumero();
    }

    public function recuperaNome ()
    {
        return $this -> nome;
    }

    protected function validaNomeTitular(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 5) {
            echo 'O nome precisa ter pelo menos 5 letras';
            exit ();
        }
    }

}