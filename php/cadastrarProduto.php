<?php
session_start();
    $conn = mysqli_connect("localhost", "root", "", "geek");
    $descricao_produto = trim($_POST['descricao_produto']);
    $quantidade_produto = trim($_POST['quantidade_produto']);
    $preco_produto = trim($_POST['preco_produto']);
    $tamanho_produto = trim($_POST['tamanho_produto']);
    $foto_produto = trim($_POST['foto_produto']);
    $id_usuario = $_SESSION['id'];
    $sql = "INSERT INTO produtos (descricao_produto,qtd_produto,tamanho_produto,imagem_produto,preco_produto,id_usuario) VALUES ('$descricao_produto', '$quantidade_produto','$tamanho_produto','$foto_produto','$preco_produto',$id_usuario)";
    $result = $conn -> query($sql);
    if($result){
        echo '<script>alert("Produto cadastrado com sucesso!!"); window.location.href = "../home.php"</script>';
    }else{
        echo '<script>alert("ERROR"); window.location.href = "../cadastrarProduto.php"</script>';
    }

?>