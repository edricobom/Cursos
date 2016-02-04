<?php

session_start();

$login = "admin";
$senha = "12345";
?>
<p> oi</p>

<?php
if($login=="admin" and $senha=="12345"){
    $_SESSION['logado'] = true;
    header('location: secreto.php');
}
else{
    echo "Não logou!";
}
?>