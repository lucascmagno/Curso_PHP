<?php
    $email = "teste.doe@exemplo.com";

    //remove todos os caracteres ilegais do email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    //valida email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        echo ("$email é um endereço de email válido!");
    }else{
        echo("$email é  um endereço de email inválido!!");
    }
    echo "<br><a href='index.php'>Home</a>"
?>