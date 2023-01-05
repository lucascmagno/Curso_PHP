<?php
    $ip = "127.0.0.1";

    if(!filter_var($ip, FILTER_VALIDATE_IP) === false){
        echo ("$ip é um endereço de ip válido!");
    }else{
        echo ("$ip não é um endereço de ip válido!!");
    }
    echo "<br><a href='index.php'>Home</a>";
?>