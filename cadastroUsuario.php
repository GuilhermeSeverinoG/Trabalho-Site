<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon"/>
    <link rel="stylesheet" href="style/cadastroUsuario.css">
    <title>Cadastrar usuário</title>
</head>
<body>
    <main>
        <div id="container-esquerda">
            <img src="imgs/logo.png">
            <p>Moda que combina com você</p>   
        </div>
        <div id="container-direita">
            <form method="post" action="php/cadastroUsuario.php">
                <h1>Cadastrar-se</h1>
                    <div class="wrap-nome">
                        <input type="text" name="nome_usuario" id="nome" required>
                        <label for="nome">Nome</label>
                    </div>
                    <div class="wrap-nome">
                        <input class="relative" type="password" name="senha_usuario" id="senha" required>
                        <label for="senha">Senha</label>
                    </div>
                    <div class="wrap-nome">
                        <input class="relative" type="password" name="senha_usuario_confirmar" id="senha" required>
                        <label for="senha">Confirmar senha</label>
                    </div>
                <input id="sumbit" type="submit" value="Cadastrar">
            </form>
        </div> 
    </main>
</body>

</html>