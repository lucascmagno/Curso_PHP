<?php

$cookie_name = "user";
$cookie_value = "Lucas Chagas";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400 = 1 dia
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "nome cookie '".$cookie_name."' não está definido";
        }else{
            echo "cookie '". $cookie_name . "' está definido<br>";
            echo "O valor é: " . $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>