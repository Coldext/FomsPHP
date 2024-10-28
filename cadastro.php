<?php
include_once('conexao.php');

if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];
    $agente = $_POST['agente'];
    $funcao = $_POST['funcao'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(nome, email, senha, telefone, genero, data_nasc, agente, funcao) 
    VALUES ('$nome', '$email', '$senha', '$telefone', '$genero', '$nascimento', '$agente', '$funcao')");

    if ($result) {
        header('Location: login.php');
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
    <a href="getReady.php">Voltar</a>
<body>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro Projeto Valorant</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="form-label"><b>Nome</b></label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                     <label for="email" class="form-label"><b>Email</b></label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                     <label for="senha" class="form-label"><b>Senha</b></label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                     <label for="telefone" class="form-label"><b>Telefone</b></label>
                </div>
                <br>
                <p><b id="sexo">Sexo</b>:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div>
                    <label for="nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="nascimento" id="nascimento" required>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="agente" id="agente" class="inputUser" required>
                     <label for="agente" class="form-label"><b>Agente</b></label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="funcao" id="funcao" class="inputUser" required>
                     <label for="funcao" class="form-label"><b>funcao</b></label>
                </div>
                <br><br>
                <input type="submit" name="enviar" id="enviar">
                <br>
            </fieldset>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
        $('#telefone').mask('(00) 0000-0000');
    </script>

</body>
</html>