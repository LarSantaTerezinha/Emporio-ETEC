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
    <title>Delete da Região</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>

<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM regiao WHERE reg_idRegiao = '".$id."';";

$res = mysqli_query($con, $sql) or die ('Erro ao tentar deletar do banco.');
if($res){
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<center><h2>Registro excluido com sucesso!<center/><h2/>";
} else {
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<center><h2>Erro ao tentar excluir registro.<center/><h2/>";
}
mysqli_close($con);
header('refresh:2, regiao.php');

?>