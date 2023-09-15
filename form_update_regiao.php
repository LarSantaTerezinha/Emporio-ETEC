<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: index.php");
}
?>
<?php
include 'conexao.php';
$id = $_GET['id'];

$sql = "SELECT * FROM regiao WHERE reg_idRegiao = ".$id.";";
$result = mysqli_query($con, $sql) or die('Erro ao retornar os dados');

while($res = mysqli_fetch_array($result)){

    $id = $res['reg_idRegiao'];
    $desig = $res['reg_desig'];
}  
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza Região</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
    <h2>Atualizar Região</h2>
    <form method="POST" action="valida_update_regiao.php" name="atualiza">
        <input type="hidden" name="id" size="30" required value="<?php echo $id;?>">
        <br><br><br>
        <label>Descrição:</label><input type="text" name="desig" size="150" required value="<?php echo $desig;?>">
        <br><br>
        <input type="submit" value="Atualizar" name="atualizar" id="atualizar"><br><br>
        <input type="reset" name="limpar" value="Limpar">
        <br><br>
    </form>
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>