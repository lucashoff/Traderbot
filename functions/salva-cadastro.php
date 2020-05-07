<?php
    include "dao-usuario.php";

    if($_POST["e-mail"] !== $_POST["e-mail-confirm"]){
        echo "E-mail não confirmado corretamente.";
        die();
    }else{
        $email = $_POST['e-mail'];
    }

    if($_POST['pass'] !== $_POST['pass-confirm']){
        echo "Senha não confirmada corretamente.";
        die();
    }else{
        $senha = $_POST['pass'];
    }

    $nome = $_POST['nome'];

    cadastra_usuario($nome, $email, $senha);

?>