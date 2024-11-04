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
    <title>Atualizar produto</title>
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon"/>
    <script src="js/tabela.js"></script>  
    <link rel="stylesheet" type="text/css" href="style/paginaProduto.css">
</head>
<body>
    <div id="formularioprodutos">
        <form method="post" action="php/atualizarProduto.php">
            <input type="hidden" name="id_produto" id="id_produto" readonly/>
            <label>Descrição</label>
            <input type="text" name="descricao_produto" id="descricao_produto" class="form">
            <label>Estoque</label>
            <input type="number" name="qtd_produto" id="qtd_produto" class="form">
            <label>Preço</label>
            <input type="text" name="preco_produto" id="preco_produto" class="form">
            <label>Tamanho</label>
            <select name="tamanho_produto" id="tamanho_produto" class="form">
                <option value="GG">GG</option>
                <option value="G">G</option>
                <option value="M">M</option>
                <option value="P">P</option>
                <option value="PP">PP</option>
            </select>
            <label id="botao-imagem">
                Selecionar Imagem
                <input type="file" name="imagem_produto" id="imagem_produto" class="form">
            </label>
            <input type="submit" value="Atualizar">
        </form> 
    </div>
    <script>loadFieldsUpdateProduto()</script>  
</body>
</html>