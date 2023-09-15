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
    <title>Cadastrar Região</title>
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
        $nome = $_POST["nome"];
        

        $sql = "INSERT INTO regiao (reg_desig) VALUES ('".$nome."')";
        $rs = mysqli_query($con, $sql) or die("Erro na Inserção dos dados.");
            if($rs){
                echo "<center><h2>Cadastro de região com sucesso</h2></center>";
            } else{
                echo "<center><h2>Cadastro de região com sucesso</h2></center>";
            }
        
    }
    header('refresh: 3; regiao.php');
   
?>
