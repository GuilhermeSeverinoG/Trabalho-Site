<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "geek");
    $nome_usuario = trim($_POST['nome_usuario']);
    $senha_usuario = trim($_POST['senha_usuario']);
    $senha_usuario_confirmar=trim($_POST['senha_usuario_confirmar']);
    $sql = "INSERT INTO usuarios (nome_usuario,senha) VALUES ('$nome_usuario','$senha_usuario')";
    $result = $conn -> query($sql);
    if($senha_usuario!=$senha_usuario_confirmar){
        echo '<script>alert("Senhas diferentes! Tente novamente"); window.location.href = 
        "../cadastroUsuario.php"</script>';
     }else{
        if($result){
            echo '<script>alert("Usuário cadastrado com sucesso!"); window.location.href = "../index.html"</script>';
        }else{
            echo '<script>alert("ERROR"); window.location.href = "../cadastroUsuario.php"</script>';
        }
     }
?>