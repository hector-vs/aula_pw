<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar</title>
</head>
<body class="home">
    <main class="home">
        <div id="form" class="home">
            <h2>Cadastro de usuário</h2>
            <form action="insert.php" method="post" autocomplete="off" class="home">
                <input class="inputmain" type="text" name="nome" placeholder="Nome de usuário" autofocus>
                <input class="inputmain" type="text" name="senha" placeholder="Senha">
                <input class="enviar" type="submit" value="CADASTRAR">
            </form>
            <a class="voltar home" href="index.html">Voltar</a>
        </div>
    </main>
</body>
</html>