<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
    <!--<a href="index.php">Voltar</a>-->


    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php

    if($_POST){
        session_start();
        include('conexao.php');
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];

        $sql = "INSERT INTO usuario (usu_email, usu_senha, usu_nome) VALUES ('".$email."',  '".$senha."', '".$nome."')";
        $rs = mysqli_query($con, $sql) or die("Erro no select login");
            if($rs){
                echo "<br/><br/><br/>";
                echo "<center><h2>Cadastro de usuario com sucesso!</h2></center>";
            } else{
                echo "<br/><br/><br/>";
                echo "<center><h4>Usuario não cadastro. Verifique sua conexão e retorne mais tarde!</h4></center>";
            }
        
    }
    header('refresh: 2; index.php');

?>
