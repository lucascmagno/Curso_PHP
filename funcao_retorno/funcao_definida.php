<?php
    function exclaim($str){
        return $str . "! ";
    }

    function ask($str){
        return $str . "? ";
    }

    function printFormatted($str, $format){
        echo $format($str);
    }

    //Pasa exclaim" e "ask" para as funções de retorno 
    printFormatted("Hello World", "exclaim");
    printFormatted("Hello World", "ask");

    echo "<br><br><a href='index.php'>Home</a>";
?>