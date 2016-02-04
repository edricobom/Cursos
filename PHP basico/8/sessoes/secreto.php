<?php
session_start();
?>
<?php if(isset($_SESSION['logado'])):?>
<h1> Você está vendo uma pagina secreta</h1>
<p>O resultado da megasena é: 123456</p>
<br>
<a href='logout.php' > Logout (sair)</a>
<?php else: ?>
<h1>Meu amigo, vc tem que estar logado para ver esta pagina</h1>
<a href='index.php'>Login</a>
<?php endif;?>