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
    <title>Delete do Produtor</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>

<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM produtor WHERE pro_idProdutor = '".$id."';";

$res = mysqli_query($con, $sql) or die ('Erro ao tentar deletar do banco.');
if($res){
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Registro excluido com sucesso!";
} else {
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Erro ao tentar excluir registro.";
}
mysqli_close($con);
header('refresh:2, produtorform.php');

?>