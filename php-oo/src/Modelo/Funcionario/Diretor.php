<?php


namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Autenticavel;

require_once 'autoload.php';

class Diretor extends Funcionario implements Autenticavel

{
    public function calculaBonificacao ()
    {
        return $this -> recuperaSalario()*2;
    }    

    public function podeAutenticar(string $senha): bool
    {
        return $senha = "1234";
    }
}