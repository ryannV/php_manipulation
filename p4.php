<?php
    //inicia a sessão
    session_start();

    echo "Eu sou a página 4 <p>";

    //imprime os dados da página anterior
    echo "$_SESSION[nome]<p>";
    echo "$_SESSION[senha]<p>";

    //encerra a sessão
    session_destroy();
    echo "<a href = 'p3.php'> Volta para página 3 </a>";
?>