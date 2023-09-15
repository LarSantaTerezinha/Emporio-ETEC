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
    <title>Atualização do Vinho</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
    


<?php
include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$cor = $_POST['cor'];
$grau = $_POST['grau'];
$preco = $_POST['preco'];
$fk = $_POST['produtor'];

$sql = "UPDATE vinho SET vin_nome='".$nome."', vin_ano='".$ano."', vin_cor='".$cor."', vin_grau='".$grau."', vin_preco='".$preco."', FK_pro_idProdutor='".$fk."'  WHERE vin_idVinho = '".$id."'";

$res = mysqli_query($con, $sql) or die('Erro ao tentar atualizar');
if($res){
    echo "<br><br>";
    echo "<br><br>";
    echo "<center><h3>Registro atualizado com sucesso!</h3></center>";
} else {
    echo "<br><br>";
    echo "<br><br>";
    echo "<center><h2>Erro na atualização dos dados</h2></center>";

}
mysqli_close($con);
header('refresh: 3; vinhoform.php');

?>


<script src="js/bootstrap.min.js"></script>
</body>
</html>

