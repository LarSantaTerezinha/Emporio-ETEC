<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produtor</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Evino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="produtorform.php">Produtores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="regiao.php">Região</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="vinhoform.php">Vinhos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="encerrar.php">Encerrar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <br>
    <br>

<body>
<center>
    <div class="container"> 
    <div class="col-8 bg-info text-white  align-items-center text-center">

     
      <h2>Cadastro de Produtor</h2>    
      <br><br>
         <form method="POST" action="cadastrar_produtor.php">
    
         <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control align-items-center">
        <br>
        <label for="morada">Morada:</label>
        <input type="text" name="morada" id="morada" class="form-control">
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" class="form-control">
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" class="form-control">
        <br>
        
        <label for="regiao">Selecione a Região</label>
        <br>    
        <select name="regiao" id="regiao">
<?php
include 'conexao.php';

$sql = "select * from regiao";
$result = mysqli_query($con, $sql) or die('Erro ao retornar os dados');
//loop do while
while($res = mysqli_fetch_array($result)){?> 
    <option value="<?php echo $res['reg_idRegiao'];?>"><?php echo $res['reg_desig'];?></option>
<?php } ?>
<?php
mysqli_close($con);
?>
    </select>
        <br><br><br>
        <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
          </form>
      
        </div>
      </div>
      </center>
    <br>
    <br>
    <a href="index.php">&nbsp;&nbsp;Voltar</a>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>