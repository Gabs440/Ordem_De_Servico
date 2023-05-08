<?php
//definição para conexão
    define('HOST' , "localhost");
    define('USUARIO' , "root");
    define('SENHA' , "");
    define('DB' , "dbos"); 

//string de conexão
$conexao = mysqli_connect(HOST , USUARIO , SENHA , DB ) or die ('<p style=" font-size: 8vh;
align: center;
margin: 20vh 0 0 35vh;
font-family: Arial;
color: #d15757;">Não foi possível realizar a conexão!</p>');

$message = "Conexão realizada com sucesso!";
echo '<p style="
          font-size: 8vh;
          align: center;
          margin: 20vh 0 0 35vh;
          font-family: Arial;
          color: #57d19f;
          ">' . $message . '</p>';
?> 