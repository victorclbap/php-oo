<?php 


require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca, Conta};
use Alura\Banco\Modelo\{Endereco, CPF};


    
$endereco = new Endereco (cidade: 'São Paulo', bairro: 'XX', numero: '57B', rua: 'YY');
$primeiraConta = new ContaCorrente (new Titular(new CPF ('111.222.333-44'),'Victor', $endereco));
$primeiraConta -> deposita(500);
$primeiraConta -> saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL; 

$segundaConta = new ContaPoupanca(new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco));
var_dump($segundaConta);

$outra = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco));


echo Conta::recuperaNumeroDeContas() . PHP_EOL;

$segundaConta -> deposita (100);

echo $segundaConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;



echo $primeiraConta -> recuperaEndereco1();



