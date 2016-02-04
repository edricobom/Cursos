<?php
ini_set("default_charset", 'utf-8');
/**
 * Created by PhpStorm.
 * User: devweb
 * Date: 03/02/16
 * Time: 08:57
 */
abstract class Eletronico
{

    protected $valor;
    protected $consumo;

    protected function pula(){
        echo "<br />";
    }
    public function getValor(){
        return $this->valor;
    }

    public function getConsumo(){
        return $this->consumo;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function setConsumo($consumo)
    {
        $this->consumo = $consumo;
    }

    abstract public function exibirInformaces();
}
interface ICelular{
    public function exibirInformaces();
}
interface IVideogame{
    public function exibirInformaces();
    public function mostrarjogos();
}
class Celular extends Eletronico implements Icelular
{
    private $tamanhotela;
    public function __construct($preco,$wats,$tela){
        $this->setValor($preco);
        $this->setConsumo($wats);
        $this->setTamanhotela($tela);
    }

    protected function getTamanhotela()
    {
        return $this->tamanhotela;
    }

    public function exibirInformaces()
    {
        echo $this->getValor();
        $this->pula();
        echo $this->getConsumo();
        $this->pula();
        echo $this->getTamanhotela();
        $this->pula();
    }


    public function setTamanhotela($tamanhotela)
    {
        $this->tamanhotela = $tamanhotela;
    }
}
class Videogame extends Eletronico implements IVideogame
{
    private $listajogos= array();

    public function setListajogos($listajogos)
    {
        $this->listajogos= $listajogos;
    }

    public function exibirInformaces()
    {
        echo $this->getValor();
        $this->pula();
        echo $this->getConsumo();
        $this->pula();
        $this->mostrarjogos();
    }
    public function mostrarjogos()
    {
        echo "Esses são os jogos para o console:";
        $this->pula();
        foreach ($this->listajogos as $jogo)
        {
            echo $jogo;
            $this->pula();
        }
    }

    public function __construct($preco,$wats,$listajogos="")
    {
        $this->setValor($preco);
        $this->setConsumo($wats);
        $this->setListajogos($listajogos);
    }
}

$nokia = new Celular(400,200,20);
$nokia->exibirInformaces();
$jogos = array("Mario","Pokemon","Wii sports");
$wii = new Videogame(800,300,$jogos);
$wii->exibirInformaces();

//@TODO ....