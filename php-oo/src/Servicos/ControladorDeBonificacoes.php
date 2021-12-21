<?php

namespace Alura\Banco\Servicos;
use Alura\Banco\Modelo\Funcionario\Funcionario;

require_once 'autoload.php';

class ControladorDeBonificacoes 
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacao (Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal (): float
    {
        return $this -> totalBonificacoes;
    }

}