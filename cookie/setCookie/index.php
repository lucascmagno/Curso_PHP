<?php
//set cookie
$cookie_name = "user";
$cookie_value = "Alex Potter";

setcookie($cookie_name, $cookie_value, time() +(86400 * 30), "/");
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
        //modifica o cookie
        if(!isset($_COOKIE[$cookie_name])){
            echo "Nome cookie '" . $cookie_name . "' não foi definido";
        }else{
            echo "Cookie '" . $cookie_name . "' foi definido!<br>";
            echo "O valor é: " . $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>