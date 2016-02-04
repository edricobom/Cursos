<?php

class Usuario
{
    public $nome;
    public $email;
}

$user = new Usuario();
$user->nome = "Wesley";
$user->email = "wsilva@schoolofnet.com";

$user2 = new Usuario;
$user2->nome = "José";
$user2->email = "j@j.com";

$arrayObject = new ArrayObject($user);


foreach($arrayObject->getIterator() as $v) {
    echo $v."<br>";
}

//
//$arrObj = [$user,$user2];
//
//$iterator = new ArrayObject($arrObj);
//
//foreach($iterator as $v) {
//    foreach($v as $v2) {
//        echo $v2."<br>";
//    }
//    echo "<hr>";
//}
