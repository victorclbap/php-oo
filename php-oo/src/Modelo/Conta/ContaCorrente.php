<?php

namespace Alura\Banco\Modelo\Conta;

require_once 'autoload.php';

class ContaCorrente extends Conta
{   
    //sobrescrevendo

    protected function percentualTarifa (): float
    {
        return 0.07;
    }

    public function transfere (float $valorATranferir, $contaDestinho): void
    {
        if ($valorATranferir > $this -> saldo){
            echo "Não é possível transferir";
            return;
        }
        $this -> saca ($valorATranferir);                  // para chamar métodos também usa "->"
        $contaDestinho -> deposita ($valorATranferir);
    }

}