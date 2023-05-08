<?php

$usuario = $_POST['usuario'];
$fone = $_POST['fone'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$perfil = $_POST['perfil'];

// camada de conexão
include_once("conexao.php");

/* Variáveis dos registros */
$sql = "INSERT INTO tbusuarios (usuario, fone, login, senha, perfil) VALUES";
$sql .= "('$usuario','$fone','$login','$senha','$perfil')";
 
/* aqui conexão com o banco*/
mysqli_query($conexao,$sql) or die('<p style=" font-size: 8vh;
align: center;
margin: 20vh 0 0 35vh;
font-family: Arial;
color: #d15757;">Erro ao tentar cadastrar usuário!</p>');

mysqli_close($conexao);
$message = "Cadastro de usuário realizado com sucesso!";
echo '<p style="
          font-size: 8vh;
          align: center;
          margin: 20vh 0 0 35vh;
          font-family: Arial;
          color: #57d19f;
          ">' . $message . '</p>';
?>