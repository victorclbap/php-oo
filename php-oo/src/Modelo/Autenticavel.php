<?php

// Classe onde todos os métodos são abstratos = interface

namespace Alura\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha);

}