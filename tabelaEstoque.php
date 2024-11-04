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
    <link rel="stylesheet" type="text/css" href="style/tabelaEstoque.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon"/>
    <title>Tabela do estoque</title>
</head>
<body>
    <div id="resultado"></div>
    <script src="js/tabela.js"></script> 
</body>
</html>