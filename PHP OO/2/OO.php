<?php

class Objeto
{
    public   function somar($x,$y)
    {
        return $x+$y;
    }
}

$obj = new Objeto;
echo $obj->somar(10,5);