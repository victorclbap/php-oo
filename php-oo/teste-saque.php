<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, Conta, ContaPoupanca, ContaCorrente};
use Alura\Banco\Modelo\{Endereco, CPF,Pessoa};

$endereco = new Endereco (cidade: 'São Paulo', bairro: 'XX', numero: '57B', rua: 'YY');
$outra = new ContaPoupanca(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco));

$outra -> deposita(100);
echo $outra->recuperaSaldo() . PHP_EOL;

$outra -> saca(50);
echo $outra -> recuperaSaldo();