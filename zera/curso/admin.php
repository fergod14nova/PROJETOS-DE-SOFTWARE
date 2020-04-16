<p>PÁGINA DOS ADMINISTRADORES</p><br>
<p>---Sem administradores cadastrados---</p>

<!-- Aqui usaremos a função HASH, SALT e TRIM() -->

<form action="admin_acess_banco.php" method="post">
    <table>
        <tr>
            <td>
                <label for="nome">Nome:</label>
            </td>
            <td>
                <input type="text" name="nome" size="30" maxlength="30">
            </td>
        </tr>
        <tr>
            <td>
                <label for="senha">Senha</label>
            </td>
            <td>
                <input type="text" name="senha" placeholder="Sua senha ficará visível apenas aqui" size="30">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Sua senha será encriptografada com HASH
            </td>
        </tr>
    </table>
    <input type="submit" value="cadastrar">
</form>