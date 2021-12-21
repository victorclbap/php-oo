<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta                                 
{                                           
    private Titular $titular;                                                                                                      
    private float $saldo = 0;               
    private static $numeroDeContas = 0;     
                                              
// forma de acessar um atributo estático , ao invés da "->" usa "::"
// pode deixar o Self ou o nome da classe "Conta"

    public function __construct (Titular $titular )    
    {
        $this -> titular = $titular;
        Self :: $numeroDeContas ++ ;                 
    }                                                

    public function saca (float $valorASacar): void
    {  
            // early return  
                
            if ($valorASacar > $this -> saldo) {
            echo "Saldo indisponível";
            return;                             
        }
        
        $saque = $valorASacar + $valorASacar * $this->percentualTarifa(); 
        $this -> saldo -= $saque;
    }

    public function deposita (float $valorADepositar): void   
    {
        if ($valorADepositar <= 0) {
            echo "Não é possível depositar";
            return;
        }

        $this -> saldo += $valorADepositar;
    }

    // getters -> métodos para recuperar os atributos, pois estão privados e não podem ser exibidos nem alterados de fora da classe

    public function recuperaSaldo(): float
    {
        return $this -> saldo;
    }

    public function recuperaNomeTitular(): string       
    {                                                    
        return $this-> titular->recuperaNome();                                                         
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    // método estático | da classe -> recupera valor do número de contas

    public static function recuperaNumeroDeContas(): int
    {
        return Self :: $numeroDeContas;
    }

    public function recuperaEndereco1 () {
        return $this -> titular -> recuperaEndereco2();
    }
    
    // Método abstrato obriga a implementação pelas classes filhas
    // classe abstrata não está completa, precisa extender para completar.
    
    abstract protected function percentualTarifa(): float;

}

