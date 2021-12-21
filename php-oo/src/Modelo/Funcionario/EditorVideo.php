<?php

namespace Alura\Banco\Modelo\Funcionario;

require_once 'autoload.php';

class EditorVideo extends Funcionario
{

    public function calculaBonificacao()
    {
        return 1.2;
    }

}
