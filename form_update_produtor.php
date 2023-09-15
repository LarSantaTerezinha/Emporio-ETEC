<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: index.php");
}
?>
<?php
include 'conexao.php';
$id = $_GET['id'];

$sql = "SELECT * FROM produtor WHERE pro_idProdutor = ".$id.";";
$result = mysqli_query($con, $sql) or die('Erro ao retornar os dados');

while($res = mysqli_fetch_array($result)){

    $id = $res['pro_idProdutor'];
    $nome = $res['pro_nome'];
    $morada = $res['pro_morada'];
    $telefone = $res['pro_telefone'];
    $email = $res['pro_email'];
    $fk = $res['FK_reg_idRegiao'];//dependendo do lab tem de ver no banco o nome CERTO de cada campo
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
    <center><h2>Atualizar produtor</h2></center>
    <center>
    <form method="POST" action="valida_update_produtor.php" name="atualiza">
        <input type="hidden" name="id" size="30" required value="<?php echo $id;?>">
        <br><br><br>
        <label>Nome:&nbsp;</label><input type="text" name="nome" size="50" required value="<?php echo $nome;?>">
        <br><br>
        <label>Morada:</label><input type="text" name="morada" size="50" value="<?php echo $morada;?>">
        <br><br>
        <label>Telefone:</label><input type="text" name="telefone" size="50" value="<?php echo $telefone;?>">
        <br><br>
        <label>Email:&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="email" size="50" value="<?php echo $email;?>">
        <br><br>
        
        <select name="regiao">
            <option value="" disable>Selecione a Região</option>
        <?php
        include "conexao.php";
        $sql = "SELECT * from regiao";
        $rs = mysqli_query($con, $sql) or die ("Erro no select da região");
        while($dados = mysqli_fetch_array($rs)){
            if($dados['reg_idRegiao'] == $fk){
                echo "<option value=".$dados['reg_idRegiao']." selected>".$dados['reg_desig']."</option>";
            } else {
                echo "<option value=".$dados['reg_idRegiao'].">".$dados['reg_desig']."</option>";
            }
        }
        ?>
        </select>
        <br><br>
        <input type="submit" value="Atualizar" name="atualizar" id="atualizar">
        <input type="reset" name="limpar" value="Limpar">
        <br><br>
    </form>
    </center>
    
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>