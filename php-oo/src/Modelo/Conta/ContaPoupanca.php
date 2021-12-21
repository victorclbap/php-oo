<?php

namespace Alura\Banco\Modelo\Conta;

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;

class ContaPoupanca extends Conta
{

    protected function percentualTarifa(): float
    {
        return 0.03;
    }

}

