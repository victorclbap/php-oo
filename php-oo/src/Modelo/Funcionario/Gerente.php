<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

require_once 'autoload.php';

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha)
    {
        return $senha === "4321";
    }
}
