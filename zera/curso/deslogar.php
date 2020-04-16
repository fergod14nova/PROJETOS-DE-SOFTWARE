<?php
    // criando função deslogar
        session_destroy();

        echo "<script>
            window.alert('Usuário deslogado com sucesso!');
            window.location.href='login_admin.php';
        </script>";
    
?>