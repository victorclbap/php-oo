<?php

namespace Alura\Banco\Modelo\Conta;

require_once 'autoload.php';

use Alura\Banco\Modelo\{Pessoa, CPF, Endereco};
use Alura\Banco\Autenticavel;

// classe titular extende tudo o que a classe pessoa já definiu, não precisa repetir o que já estiver em Pessoa

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)

        {   // como titular é uma pessoa, os atributos são inicializados com o construtor da classe pai.
            parent :: __construct($nome, $cpf, $endereco);  
            $this -> endereco = $endereco;
        }

    public function recuperaEndereco2 ()
    {
        return $this -> endereco -> recuperaEndereco3();
    }
        
}

    

