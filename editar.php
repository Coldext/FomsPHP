<?php

if (!empty($_GET['id'])) {

    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM cadastro WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){

        while($user_data = mysqli_fetch_assoc($result)){

            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $telefone = $user_data['telefone'];
            $genero = $user_data['genero'];
            $nascimento = $user_data['data_nasc'];
            $agente = $user_data['agente'];
            $funcao = $user_data['funcao'];
        }

    }else{
        header('Location: telaPrincipal.php');
    }
}else{
    header('Location: telaPrincipal.php');
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
    <style>
        #atualizar{
        background-image: linear-gradient(to left, rgb(220, 61, 75), rgb(226, 71, 71));
        width: 100%;
        border: none;
        padding: 15px;
        border-radius: 10px;
        color: black;
        cursor: pointer;
        font-family: 'VALORANT', sans-serif;
        }
        #atualizar:hover{
        background-image: linear-gradient(to left, rgb(223, 40, 55), rgb(230, 64, 64));
        }
    </style>
</head>
    <a href="telaPrincipal.php">Voltar</a>
<body>
    <div class="box">
        <form action="salvarEdicao.php" method="POST">
            <fieldset>
                <legend><b>Cadastro Projeto Valorant</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="form-label"><b>Nome</b></label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                     <label for="email" class="form-label"><b>Email</b></label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                     <label for="senha" class="form-label"><b>Senha</b></label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                     <label for="telefone" class="form-label"><b>Telefone</b></label>
                </div>
                <br>
                <p><b id="sexo">Sexo</b>:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" <?php echo $genero == 'feminino' ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="masculino" value="masculino" <?php echo $genero == 'masculino' ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="outro" value="outro" <?php echo $genero == 'outro' ? 'checked' : '' ?> required>
                <label for="outro">Outro</label>
                <br><br>
                <div>
                    <label for="nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="nascimento" id="nascimento" value="<?php echo $nascimento ?>" required>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="agente" id="agente" class="inputUser" value="<?php echo $agente ?>" required>
                     <label for="agente" class="form-label"><b>Agente</b></label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="funcao" id="funcao" class="inputUser" value="<?php echo $funcao ?>" required>
                     <label for="funcao" class="form-label"><b>funcao</b></label>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="atualizar">
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