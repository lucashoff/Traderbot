<?php

function connect_db() {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "db_traderbot";
  
  
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
  
    if (mysqli_connect_errno($conexao)) {
       echo "Erro ao conectar no banco de dados.<br>";
    } else {
      //echo "Conexão bem sucedida!!";
      return $conexao;
    }
}


?>