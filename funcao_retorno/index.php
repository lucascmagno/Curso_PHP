<?php
    function my_callback($item){
        return strlen($item);
    }

    $strings = ["maca", "laranja", "banana", "coco"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <br><br>
    <a href="funcao_anonima.php">funcao_anonima</a><br>
    <a href="funcao_definida.php">Funçao definida pelo usuário</a>
</body>
</html>