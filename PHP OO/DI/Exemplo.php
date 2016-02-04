<?php

class Usuario
{
    private $db;

    public function __construct($host, $banco, $usuario, $senha)
    {
        $this->db = new \PDO("mysql:host={$host};dbname={$banco}",$usario,$senha);
    }

    public function salvar()
    {
        $array = array('nome'=>'Teste');
        $this->db->exec('comando para gravar na base'.$array);
    }
}

$usuario = new Usuario("localhost","banco","user","senha");

