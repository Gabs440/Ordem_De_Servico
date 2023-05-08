<?php 
$nome_cli = $_POST['nome_cli'];
$endereço_cli = $_POST['endereço_cli'];
$fone_cli = $_POST['fone_cli'];
$email_cli = $_POST['email_cli'];

// camada de conexão
include_once("conexao.php");

/* Variáveis dos registros */
$sql = "INSERT INTO tbclientes (nome_cli, endereço_cli, fone_cli, email_cli) VALUES";
$sql .= "('$nome_cli','$endereço_cli','$fone_cli','$email_cli')";
 
/* aqui conexão com o banco*/
mysqli_query($conexao,$sql) or die('<p style=" font-size: 8vh;
align: center;
margin: 20vh 0 0 35vh;
font-family: Arial;
color: #d15757;">Erro ao tentar cadastrar cliente!</p>');

mysqli_close($conexao);
$message = "Cadastro de cliente realizado com sucesso!";
echo '<p style="
          font-size: 8vh;
          align: center;
          margin: 20vh 0 0 35vh;
          font-family: Arial;
          color: #57d19f;
          ">' . $message . '</p>';
?>