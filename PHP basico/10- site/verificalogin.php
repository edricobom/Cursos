<?php

    if($_REQUEST['enviar']){
        $_SESSION['logado'] = true;
        echo "TÁ FUNCIONANDO";
        }
header("Location: index.php?page=login");



?>