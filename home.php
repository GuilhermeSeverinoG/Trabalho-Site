<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="style/home.css"/>
    <title>T-shit Geek</title>
</head>
<body>
    <header>
        <ul id="logo">
            <li><img src="imgs/Logo.png"></li>
            <li id="logo-nome">T-shirt Geek</li>
        </ul>
        <ul id="acoes">
            <li id="logo-nome"><a href="tabelaEstoque.php">Estoque</a></li>
            <li id="logo-nome"><a href="cadastrarProduto.php">Cadastrar camisa</a></li>
            <li id="logo-nome"><a href="php/logoff.php">Sair</a></li>
        </ul>
    </header>
    <main>
        <div id="resultado"></div>
    </main>
    <script src="js/home.js"></script> 
</body>
</html>