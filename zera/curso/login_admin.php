
<!-- FORMULÁRIO DE LOGIN -->
    <form action="seguranca.php" method="POST" name="form_login">
        <table>
            <tr>
                <td>
                    <label for="nome">Nome:</label>
                </td>
                <td>
                    <input type="text" name="frm_nome" size="30" maxlength="30">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="senha">Senha</label>
                </td>
                <td>
                    <input type="text" name="frm_senha" placeholder="Sua senha ficará visível apenas aqui" size="30">
                </td>
            </tr>
        </table>
        <input type="submit" value="acessar">
    </form>