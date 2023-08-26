<?php
    include("conexao.php");

    if(isset($_POST)){
        $data = [
            "nome"=> $_POST['nome'],
            "senha"=> $_POST['senha'],
        ];
        $sql = "INSERT INTO tb_usuario (nome, senha) VALUES (:nome, :senha)";
        $stmt = $conn->prepare($sql);
        $stmt->bindparam(":nome", $_POST['nome']);
        $stmt->bindparam(":senha", $_POST['senha']);
        $stmt->execute();

        if($stmt){
            echo("Usuário cadastrado com sucesso!!!");
            echo("<meta http-equiv='refresh' content='2; cadastro.php'>");
        }else{
            echo("Erro ao cadastrar usuário!!!");
        }
    }
?>