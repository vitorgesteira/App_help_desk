<?php
    session_start();

    //Remove indices do arrayde sessão
    //unset()
    // unset($_SESSION["autenticado"]);

    //destruir a variavel de sessão
    //session_destroy()
    session_destroy();


    header('Location: index.php');
?>