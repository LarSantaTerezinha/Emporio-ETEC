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
    <title>Cadastrar Produtor</title>
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
        $morada = $_POST["morada"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $regiao = $_POST['regiao'];

        $sql = "INSERT INTO produtor (pro_nome, pro_morada, pro_telefone, pro_email, fk_reg_idRegiao) VALUES ('".$nome."',  '".$morada."', '".$telefone."', '".$email."', '".$regiao."')";
        //fk_reg_idRegiao depende do lab pode ser FK_reg_idRegiao
        $rs = mysqli_query($con, $sql) or die("Erro no select login");
            if($rs){
                echo "<br><br>";
                echo "<br><br>";
                echo "<h2>Cadastro de Produtor com sucesso</h2>";
            } else{
                echo "<br><br>";
                echo "<br><br>";
                echo "<h2>Produtor não cadastrado</h2>";
            }
        
    }
    header('refresh: 3; produtorform.php');

?>