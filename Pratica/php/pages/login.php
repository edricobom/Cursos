<?php include_once "header.php"; ?>
<div id="form">
    <form action="change.php" method="post">
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
                <select name="estado">
                    <option value="warrior">Guerreiro</option>
                    <option value="rogue" selected="selected">Gatuno</option>
                    <option value="wizard">Feiticeiro</option>
                </select>
            </label>

        </fieldset>

    </form>
</div>
<?php include_once "body/footer.php"; ?>