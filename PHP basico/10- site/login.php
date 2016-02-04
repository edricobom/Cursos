<div id="form">
    <?php
     ?>

<!--    --><?php //if($_GET['nome']="teste" and $_GET['senha']="testar")
//    ?>
    <?php if(!$_REQUEST['enviar'] and $_SESSION['logado']==false):?>

        <form action="index.php?page=verificalogin" method="post">
        <fieldset>
            <legend>Usuário</legend>
            <label class="rotulo">
                Nome:
                <input type="text" name="nome" value="" maxlength="30" onfocus="true"/>
            </label>

            <label class="rotulo">
                Senha:
                <input type="password" name="senha" value="" maxlength="8"/>
            </label>

            <br/>
            <label class="rotulo">
                Especialidade:
                <select name="especialidade">
                    <option value="warrior">Guerreiro</option>
                    <option value="rogue" selected="selected">Gatuno</option>
                    <option value="wizard">Feiticeiro</option>
                </select>
            </label>
            <br />

        </fieldset>

        <br />
        <fieldset>
            <legend>Sexo</legend>
            Masculino:<input type="radio" name="sexo" value="Masculino"/>
            Feminino:<input type="radio" name="sexo" value="Feminino" checked="checked" />
        </fieldset>
        <br />
        <input type="submit" name="enviar" value="Enviar"/>
    </form>
    <?php else: ?>
        <h1>Dados enviados pelo formulário</h1>
        <b>Nome:</b> <?php print $nome?><br>
        <b>Senha:</b> <?php print $senha?><br>
        <b>Sexo:</b> <?php print $sexo;?> <br>
        <b>Especialidade:</b> <?php print $especialidade;?><br>
        <b>Sessão:</b> <?php echo session_id(); ?> <br>
        <a href="index.php?page=logout"> Voltar</a>

    <?php endif;?>


</div>
