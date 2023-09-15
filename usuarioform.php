<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuario</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">

<body>
    <center>
    <h2>Cadastro de Usuario</h2>    
    <br><br>
    <form method="POST" action="cadastrar_usuario.php">

        <label for="email">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>
        <br><br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br><br><br>
        <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">

    </form>
    </center>
    <br>
    <br>
    <a href="index.php">&nbsp;&nbsp;Voltar</a>


    <script src="js/bootstrap.min.js"></script>
</body>

</html>