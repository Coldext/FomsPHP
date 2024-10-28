<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <a href="getReady.php">Voltar</a>
    <div class="main">
        <h1>LOGIN</h1>
        <form action="testeLogin.php" method="POST">
        <input type="text" name="email">
        <label for="nome" class="label"><b>Email</b></label>
        <br><br>
        <input type="password" name="senha">
        <label for="senha" class="label"><b>Senha</b></label>
        <br><br>
        <input type="submit" name="submit" id="botao" value="enviar"></input>
        </form>
    </div>
</body>
</html>