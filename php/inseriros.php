<?php
$data_os = $_POST['data_os'];
$equipamento = $_POST['equipamento'];
$defeito = $_POST['defeito'];
$serviço = $_POST['serviço'];
$tecnico = $_POST['tecnico'];
$valor = $_POST['valor'];

// camada de conexão
include_once("conexao.php");

/* Variáveis dos registros */
$sql = "INSERT INTO tbos (data_os, equipamento, defeito, serviço, tecnico, valor) VALUES";
$sql .= "('$data_os','$equipamento','$defeito','$serviço','$tecnico','$valor')";
 
/* aqui conexão com o banco*/
mysqli_query($conexao,$sql) or die('<p style=" font-size: 8vh;
align: center;
margin: 20vh 0 0 35vh;
font-family: Arial;
color: #d15757;">Erro ao tentar informar a Ordem de Serviço!</p>');

mysqli_close($conexao);
$message = "Ordem de Serviço informada com sucesso!";
echo '<p style="
          font-size: 8vh;
          align: center;
          margin: 20vh 0 0 35vh;
          font-family: Arial;
          color: #57d19f;
          ">' . $message . '</p>';
?>