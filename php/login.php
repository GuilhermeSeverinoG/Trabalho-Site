<?php
    session_start();
    $nome_usuario = $_POST['nome_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $conn = mysqli_connect("localhost", "root", "", "geek");
    $sql = "SELECT * FROM usuarios WHERE nome_usuario = '$nome_usuario' AND senha = '$senha_usuario'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows ($result) > 0 ){
        $row = mysqli_fetch_array($result);
        $_SESSION['nome_usuario'] = $row['nome_usuario'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['senha'] = $row['senha'];
        header('location:../home.php');
    }else{
        $_SESSION['nome_usuario'] = $row['nome_usuario'];
        $_SESSION['senha'] = $row['senha'];  
        header('location:../index.html');
        session_start();
        session_destroy();
        unset( $_SESSION );
    }
?>