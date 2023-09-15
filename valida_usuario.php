<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida usuario</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php



    if($_POST){
        session_start();
        include('conexao.php');
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $nome = $_POST['nome'];

        if(!$email or !$senha){
            echo "<center><h1>Campo email ou senha em branco. Verifique.</center></h1>";
        }

        $sql = "SELECT * FROM usuario WHERE usu_email = '".$email."' and usu_senha = '".$senha."'";
        $rs = mysqli_query($con, $sql) or die("Erro no select login");
            if($dados = mysqli_fetch_array($rs)){
                $_SESSION["email"] = $dados['usu_email'];
                $_SESSION["nome"] = $dados['usu_nome'];
                header("location: home.php");
            } else{
                header("location: index.php"); //estava usuarioform.php mudei para o index
        }
    }

    


?>



