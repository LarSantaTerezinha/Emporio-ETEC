<?php
if(session_start()){
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Emporio</title>
    <style>
  #grad1 {
  width: 500px;
  /*background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,34));*/
  background: rgb(131,58,180);
  background: linear-gradient(137deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 0%, rgba(69,252,239,1) 0%);
}
</style>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
body {
  background: url(img/Vinicola-Miolo.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<body>

  <center>
    <br>
    <h1>Bem vindo ao Sistema de Emporio de Vinhos</h1>
    <br>
    <h3>Faça login para acessar o sistema</h3>
    <br>

  <div>
    <form method="POST" action="valida_usuario.php">

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br><br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <br><br><br>
        <input type="submit" value="Entrar" name="entrar" id="entrar">

        <br><br><br>
        <p><i>Não é cadastrado? Clique em </i><button><a href="usuarioform.php">Cadastrar</a></button></p>
    </form>
    </div>
  </center>

  
    <script src="js/bootstrap.min.js"></script>
</body>

</html>