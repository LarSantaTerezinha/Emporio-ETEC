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
    <title>Atualização da Região</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
    


<?php
include 'conexao.php';
$id = $_POST['id'];
$desig = $_POST['desig'];

$sql = "UPDATE regiao SET reg_desig='".$desig."' WHERE reg_idRegiao = '".$id."'";

$res = mysqli_query($con, $sql) or die('Erro ao tentar atualizar');
if($res){
    echo "<center><h3>Registro atualizado com sucesso!</h3></center>";
} else {
    echo "<center><h2>Erro na atualização dos dados</h2></center>";

}
mysqli_close($con);
header('refresh: 3; regiao.php');

?>


<script src="js/bootstrap.min.js"></script>
</body>
</html>

