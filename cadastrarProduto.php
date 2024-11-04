<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/cadastroProduto.css">
    <title>Formulário para Cadastrar Produtos</title>
    <script>
        function showAlert() {
            const urlParams = new URLSearchParams(window.location.search);
            const success = urlParams.get('success');
            const error = urlParams.get('error');

            if (success) {
                alert("Produto cadastrado com sucesso!");
            } else if (error) {
                alert("Erro ao cadastrar o produto.");
            }
        }
    </script>
</head>
<body onload="showAlert()">
        <form method="post" action="php/cadastrarProduto.php">
            <p>Cadastrar produto</p>
            <input type="text" name="descricao_produto" placeholder="Descrição do Produto" required class="form"/>
            <input type="number" name="quantidade_produto" placeholder="Estoque" required class="form"/>
            <input type="number" name="preco_produto" placeholder="R$ 0.00" required>
            <select name="tamanho_produto" required class="form">
                <option value="">Selecione o Tamanho</option>
                <option value="GG">GG</option>
                <option value="G">G</option>
                <option value="M">M</option>
                <option value="P">P</option>
                <option value="PP">PP</option>
            </select>
            <label id="botao-imagem">
                Selecionar Imagem
                <input type="file" name="foto_produto" required/>
            </label>
            <input type="submit" value="Enviar"/>
        </form>
</body>
</html>

