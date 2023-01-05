<?php
    $int = 0;

    if(filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false){
        echo "Número inteiro válido!";
    }else{
        echo "Número inteiro inválido!";
    }
    echo "<br><br><a href='index.php'>home</a><br><br>";
    echo "<a href='limpar.php'>Filtro - Limpar</a>";
    echo "<br><a href='validar_int.php'>validar_int</a>";
?>