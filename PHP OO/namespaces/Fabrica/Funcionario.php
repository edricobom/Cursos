<?php

namespace Fabrica;
class Funcionario
{

    public function teste()
    {
        $funcionario = new \Fabrica\Funcionario; #ou
        $funcionario = new Funcionario; # esta dentro do namespace fabrica
        $data = new \DateTime;
        // $pdo = new Pdo(); Errado, não está chanando da raiz: \Pdo

    }

}
