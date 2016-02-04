<?php

/**
 * Created by PhpStorm.
 * User: devweb
 * Date: 02/02/16
 * Time: 10:41
 */
class Usuario
{
    privade $db;

    public function __construct(\PDO $db)
    {
        $this->db= $db
    }
}


class Venda
{
    public function __construct($usuario)
    {
        $this->usuario = $usuario;
    }
}

class VendaContainer
{
    public static function getDb()
    {
        $db = new \PDO("mysql:host={$host};dbname-{$banco}", $usuario, $senha);
        return $db;
    }
    public static function getUsuario()
    {
        return new Usuario(self::getDb());
    }
    public static function getVenda()
    {
        return new Venda(self::getUsuario());
    }
}

$db = new \PDO("mysql:host={$host};dbname-{$banco}", $usuario, $senha);
$usuario = new Usuario($db);
$venda = new Venda($usuario);

$venda=VendaContainer::getVenda();