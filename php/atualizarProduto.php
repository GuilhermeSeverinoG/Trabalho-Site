<?php
    $conn = mysqli_connect("localhost", "root", "", "geek");
    $id_produto = $_POST['id_produto'];
    $descricao_produto = $_POST['descricao_produto'];
    $qtd_produto = $_POST['qtd_produto'];
    $preco_produto = $_POST['preco_produto'];
    $tamanho_produto = $_POST['tamanho_produto'];
    $imagem_produto = $_POST['imagem_produto'];
    
    $sql = "UPDATE produtos SET descricao_produto='$descricao_produto',qtd_produto='$qtd_produto',preco_produto='$preco_produto',tamanho_produto='$tamanho_produto',imagem_produto='$imagem_produto' WHERE id_produto ='$id_produto'";
    $result = $conn -> query($sql); 
    if($result){
        echo '<script>alert("Produto atualizado com sucesso!"); window.location.href = "../home.php"</script>';
    }else{
        echo '<script>alert("Erro ao atualizar produto!"); window.location.href = "../tabelaEstoque.php"</script>';
    }
?>
