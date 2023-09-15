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
    <title>Cadastrar Vinho</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


<?php

    if($_POST){
        //session_start();

        include('conexao.php');
        $nome = $_POST["nome"];
        $ano = $_POST["ano"];
        $cor = $_POST["cor"];
        $grau = $_POST["grau"];
        $preco = $_POST["preco"];
        $foto = $_FILES["foto"]["name"];
        $produtor = $_POST["produtor"];

            $nome_arquivo = $_FILES['foto']['name'];
            $tmp_nome = $_FILES['foto']['tmp_name'];
            $local_imagem = "img/vinhos/";
            $carregar = move_uploaded_file($tmp_nome, $local_imagem.$nome_arquivo);


            if($carregar){
            
                echo "<center><h4>Imagem salva com sucesso!</h4></center>";
            
            } else {
            
                echo "<center><h4>Imagem não salva. Verifique o arquivo de carregamento.</h4></center>";
            
            }

        $sql = "INSERT INTO vinho (vin_nome, vin_ano, vin_cor, vin_grau, vin_preco, vin_foto_vinho, FK_pro_idProdutor) VALUES ('".$nome."',  '".$ano."', '".$cor."', '".$grau."','".$preco."', '".basename($_FILES["foto"]["name"])."', '".$produtor."')";
        //fk_reg_idRegiao depende do lab pode ser FK_reg_idRegiao
        $rs = mysqli_query($con, $sql) or die("Erro ao Inserir novo Vinho");
            if($rs){
                echo "<br><br>";
                echo "<br><br>";
                echo "<center><h2>Cadastro de Vinho com sucesso</h2></center>";
            } else{
                echo "<br><br>";
                echo "<br><br>";
                echo "<center><h2>Vinho não cadastrado</h2><center>";
            }
        
    }
    header('refresh: 3; vinhoform.php');

?>