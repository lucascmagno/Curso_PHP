<?php
    $int = 100;

    if(!filter_var($int, FILTER_VALIDATE_INT) == false){
        echo ("Número inteiro é válido!");
    }else{
        echo("Número inteiro é inválido!");
    }
    echo "<br><br><a href='index.php'>home</a><br><br>";
    echo "<a href='limpar.php'>Filtro - Limpar</a>";
    echo "<br><a href='filter_0.php'>Filtro com 0</a>";
?>