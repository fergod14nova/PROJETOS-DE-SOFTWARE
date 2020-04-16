<h1>CONSEGUIU MISERAVI</h1>

<?php
    // iniciando a sessão
    session_start();

    echo "bem vindo ".$_SESSION['usuario']."</br>";
    echo "Sua senha MASTER é: ".$_SESSION['senha'];
?>
<form action="deslogar.php">
    <input type="submit" value="sair">
</form>