<?php


  include('./conexao.php'); // inclui o arquivo de conexão
  
  if(empty($_POST['login']) || empty($_POST['senha'])) {
    header('Location:/os/index.html');
    exit();
  }
  
  $login = mysqli_real_escape_string($conexao, $_POST['login']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
  
  /*query de consulta*/
  $query = "select login, iduser from tbusuarios where login = '{$login}' && senha = '{$senha}'";
  
  $result = mysqli_query($conexao, $query);
  
  $row = mysqli_num_rows($result);
  
  if($row == 1){
    header("Location:/os/paginas/principal.html");
    exit(); 
  } else{
    header('Location:/os/index.html'); 
    exit();
  }
?>