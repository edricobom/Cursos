<?php

interface ICarro
{
    public function ligar();
    public function parar();
    public function trocaDeMarcha($marcha);

}

class Gol implements ICarro
{
    public function ligar()
    {
        echo "ligou";
    }

    public function parar()
    {
        echo "parou";
    }

    public function trocaDeMarcha($marcha)
    {
        echo "trocou para {$marcha}";
    }
}