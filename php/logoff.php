<?php
    session_start();
    unset ($_SESSION['nome_usuario']);
    unset ($_SESSION['senha_usuario']);
    unset ($_SESSION['id']);
    session_destroy();
    header('location:../index.html');
    exit();
?>