<?php

    include_once('conexao.php');

    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $nascimento = $_POST['nascimento'];
        $agente = $_POST['agente'];
        $funcao = $_POST['funcao'];

        $sqlUpdate = "UPDATE cadastro SET nome = '$nome', email = '$email', senha = '$senha', telefone = '$telefone', genero = '$genero', data_nasc = '$nascimento', agente = '$agente', funcao = '$funcao' WHERE id='$id'";
        
        $result = $conexao->query($sqlUpdate);

    }
    header('Location: telaPrincipal.php');
    
?>