<?php

function connect_db() {
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $bd = "db_traderbot";


  $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

  if (mysqli_connect_errno($conexao)) {
     echo "Problemas  na conexao, verifique seus dados";
     echo "<br><br>";
  } else {
    // echo "Conexão bem sucedida!!";
    // echo "<br><br>";
    return $conexao;
  }
}
?>
