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
    <title>Home</title>
</head>
<link  rel="stylesheet" href="css/bootstrap.css">

<body>
    
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
    <center>
    <h1>
        <p><center>Bem vindo(a)!</center></p>
        <i><h4><center><?php echo $_SESSION['nome'];?></center></h4></i><!-- estava ['email'] coloquei ['nome']-->
        <br>
        <h3><i>Clique no menu acima ou uma opção abaixo para acessar as funcionalidades do sistema</i></h3>
    </h1>
    </center>
  <!-- inicio carrossel -->
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/emporio2-old.jpeg" class="d-block w-100" alt="Emporio Santa Catarina" height="500px">
    </div>
    <div class="carousel-item">
      <img src="img/emporio3-old.jpeg" class="d-block w-100" alt="Emporio Chile" height="500px">
    </div>
    <div class="carousel-item">
      <img src="img/emporio4-old.jpg" class="d-block w-100" alt="Emporio Rio Grande do Sul" height="500px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!-- fim carrossel -->
    
    <br><br>

    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="produtorform.php">Produtor</a></li>
        <li><a href="regiao.php">Regiao</a></li>
        <li><a href="vinhoform.php">Vinhos</a></li>
        <li><a href="encerrar.php">Encerrar</a></li>
    </ul>

    <script src="js/bootstrap.js"></script>
</body>
</html>