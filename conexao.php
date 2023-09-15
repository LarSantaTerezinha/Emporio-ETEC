<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = 'root';//sem senha é na escola com senha é na hermina
$banco = 'bd_emporio';//ou bd_emporio ou emporio dependendo do LAB -- 
$con = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro na URL de conexão do banco de dados');

?>