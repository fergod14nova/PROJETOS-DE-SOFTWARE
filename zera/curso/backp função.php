<!-- CRIANDO SISTEMA DE LOGIN -->
<?php
    // testando se o usuário já está logado
    if(isset($_REQUEST['valor']) and ($_REQUEST['valor']) == 'enviado'){
    // caso o array valor e o request valor forem iguais a enviado, execute o bloco a seguir

        // iniciando sessão
        session_start();

        // criando variáveis de sessão
        $_SESSION['nome'] = $_POST['frm_nome'];
        $_SESSION['senha'] = $_POST['frm_senha'];

        // REDIRECIONANDO PARA PRÓXIMA PÁGINA
        echo "<script>
            window.alert('Usuário Logado com sucesso!');
            window.location.href='index_admin.php';
        </script>";
    }
    else{
        // formulário de login, aqui não vou fechar a chave "}", pois será html, depois sim, a chave será fechada, em outro bloco php
?>
    <!-- FORMULÁRIO DE LOGIN -->
    <form action="login_admin.php?valor=enviado" method="post" name="form_login">
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
<?php
    } //fechando a chave do 'else'
?>