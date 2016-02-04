<?php require_once "header.php"; ?>



<div id="conteudo">

    <?php

    if(session_id() == '') {
        session_start();}

        if(!isset($_GET['page']))
        require_once("home.php");
        else
        require_once($_GET['page'].".php");
    ?>


    <?php if($_SESSION['logado']){
        echo"Logado";
    }
    else{
        echo "Não logou!";
    }
    ?>

</div>

<?php require_once "footer.php"; ?>
