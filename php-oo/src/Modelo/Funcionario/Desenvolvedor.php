<?php

namespace Alura\Banco\Modelo\Funcionario;
require_once 'autoload.php';

class Desenvolvedor extends Funcionario

{   
    public function calculaBonificacao()
    {
        return 500.00;
    }
}