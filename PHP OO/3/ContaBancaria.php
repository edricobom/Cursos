<?php

abstract class Banco
{
    protected $saldo = 0;
    protected $taxa = 10;

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function __construct($valorInicial)
    {
        $this->depositar($valorInicial);
        $this->saldo -= $this->taxa;
        $this->sortear();
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getTaxa()
    {
        return $this->taxa;
    }

    protected function sortear()
    {
        $this->saldo += 5;
    }

    abstract public function saque($valor);
}

trait Exemplo
{
    public function digaOla()
    {
        echo "ola";
    }
}

class Itau extends Banco
{
    use Exemplo;

    public function saque($valor)
    {
        $this->saldo -= $valor;
    }
}

$conta = new Itau(10);
$conta->digaOla();
