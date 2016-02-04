<?php

class Pessoa
{
    public $nome;
    public $sexo;
    public $raca;
    public $idade;

    public function __construct($nome, $raca, $idade)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
    }

    public function digaOla($tio = "Rubens")
    {
       if($this->sexo == "masculino") {
           echo "Ola tio {$tio}, aqui é o {$this->nome}";
       }
       else {
           echo "Ola tio {$tio}, aqui é a {$this->nome}";
       }
    }
}

class Homem extends Pessoa
{
    public $sexo = "masculino";

    public function __construct($nome, $raca, $idade)
    {
        parent::__construct(strtoupper($nome),$raca,$idade); // chamando o construtor classe pessoa
    }


}

class Mulher extends Pessoa
{
    public $sexo = "feminino";

    public function __construct($nome, $raca, $idade)
    {
        parent::__construct(strtolower($nome),$raca,$idade);
    }
}

$joao = new Homem("João","branco",18);
$joao->saldo = "José";



//$maria = new Mulher;
//$maria->nome = "Maria";
//$maria->raca = "negra";
//$maria->idade = 21;

#echo $joao->sexo; // masculino
#echo $maria->sexo; //feminino

#echo $joao->digaOla();
echo $joao->digaOla();


