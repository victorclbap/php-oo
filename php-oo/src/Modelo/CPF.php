<?php

namespace Alura\Banco\Modelo;

final class CPF 
{

    private $numero;
    
    public function __construct ($numero) 
    {   
        $this -> validaCpf ($numero);
    }

    public function recuperaNumero(): string              
    {
        return $this->numero;
    }

    private function validaCpf ($numero)
    {   
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            echo "Cpf inválido";
            exit();
        }
        $this->numero = $numero;
    }
}