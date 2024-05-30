<?php
    //inicia a sessão
    session_start();

    //registra os dados na sessão
    $_SESSION['nome'] = $_POST['txtNome'];
    $_SESSION['senha'] = $_POST['txtSenha'];

    echo "Eu sou a página 2<p>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_SESSION['senha'] == 123 && $_SESSION['nome'] == "Ryann"){
            echo "Logado com Sucesso! <br> <br>";

            //imprime os dados do da sessão
            echo "$_SESSION[nome] <br> ";
            echo "$_SESSION[senha] <br>";
        } else {
            echo "Verifique a Senha, e tente novamente.";
        }
    }

    //link para uma outra página
    echo "<a href = 'p3.php'> Clique aqui</a>";
?>