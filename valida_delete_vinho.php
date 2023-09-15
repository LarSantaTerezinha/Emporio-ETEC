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
    <title>Delete do Vinho</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>

<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM vinho WHERE vin_idVinho = '".$id."';";

$res = mysqli_query($con, $sql) or die ('Erro ao tentar deletar do banco.');
if($res){
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<center><h1>Registro excluido com sucesso!</h1></center>";
} else {
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<center><h1>Erro ao tentar excluir registro.</h1></center>";
}
mysqli_close($con);
header('refresh:2, vinhoform.php');

?>