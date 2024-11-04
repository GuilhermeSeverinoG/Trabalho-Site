<?php
    $conn = mysqli_connect("localhost", "root", "", "geek");
    $id_produto = trim($_GET["id_produto"]);
    
    echo $sql1 = "SELECT * FROM produtos WHERE id_produto = $id_produto";
    $result = $conn -> query($sql1);

    $sql = "DELETE FROM produtos WHERE id_produto = $id_produto";
    $result = $conn -> query($sql); 
    if($result){
        echo '<script>alert("Produto excluido com sucesso!!"); window.location.href = "../tabelaEstoque.php"</script>';
    }else{
        echo '<script>alert("Erro ao excluir a produto!!"); window.location.href = "../tabelaEstoque.php"</script>';
    }
?>
