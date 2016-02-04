<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Formulários</title>
</head>
<body>


<?php if(!$_REQUEST['enviar']):?>

<!--    $_GET[]-->
<!--    $_POST[]-->
<!--    $_COOKIE[]-->
<!--    $_SESSION[]-->

<!--    $_REQUEST[]-->
<form action="index.php" method="post">
    <fieldset>
        <legend>Usuário</legend>
        <label class="rotulo">
            Nome:
           <input type="text" name="nome"
            value="<?=$_POST["nome"]?>"
            maxlength="30" onfocus="true"/>
        </label>

        <label class="rotulo">
            Senha:
            <input type="password" name="senha" value="" maxlength="8"/>
        </label>

        <br/>
        <label class="rotulo">
            Estado:
            <select name="estado">
                <option value="RJ">Rio de Janeiro</option>
                <option value="SP" selected="selected">Santa Catarina</option>
                <option value="RJ">São Paulo</option>
            </select>
        </label>

    </fieldset>

    <br />
    <fieldset>
        <legend>Sexo</legend>
        Masculino:<input type="radio" name="sexo" value="Masculino"/>
        Feminino:<input type="radio" name="sexo" value="Feminino" checked="checked" />
    </fieldset>
    <br />

    Receber novidades: <input type="checkbox" name="novidades" value="s" checked="checked"/>


    <input type="hidden" name="pagamento" value="boleto" />

    <br />

    <input type="button" name="botão" value="botão"/>

    <br />
    <input type="submit" name="enviar" value="Enviar"/>
</form>
<?php else: ?>
<h1>Dados enviados pelo formulário</h1>
    <b>Nome:</b> <?php echo $_POST["nome"];?><br>
    <b>Senha:</b> <?php echo $_POST["senha"];?><br>
    <b>Sexo:</b> <?php echo $_POST["sexo"];?> <br>
    <b>Estado:</b> <?php echo $_POST["estado"];?><br>
    <a href="index.php"> Voltar</a>
<?php endif;?>

</body>
</html>