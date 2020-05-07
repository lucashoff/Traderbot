<?php

    include "conexao.php";

    function cadastra_usuario($nome, $email, $senha){
        $conexao = connect_db();

        $sql = "insert into usuario (email, senha, nome_completo) values ('$email', '$senha', '$nome')";

        $result = mysqli_query($conexao, $sql) or die("Falha no insert.<br>".mysql_error());

        mysqli_close($conexao);
    }

?>