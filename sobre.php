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
    <title>Sobre</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
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
<br><br>
<center>
<p><i>Vinícola Madre Deus - Argentina</i></p>
<img src="img/vinicola.png" alt="">
</center>
<br><br>
  <?php
    echo "<center>";
    echo "<h1>Seja bem vindo(a), <strong> ".$_SESSION['nome']."</strong> aproveite para conhecer nossa página!</h1>";
    echo "</center>";
    ?>
<br><br>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="produtorform.php">Produtor</a></li>
        <li><a href="regiao.php">Regiao</a></li>
        <li><a href="vinhoform.php">Vinhos</a></li>
        <li><a href="encerrar.php">Encerrar</a></li>
    </ul>

<script src="js/bootstrap.min.js"></script>
</body>
</html>