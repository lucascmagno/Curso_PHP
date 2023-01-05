<?php
    $url = "https://www.w3schools.com";

    //remove todos os caracteres ilegais da url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    //valida url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo ("$url é uma url válida!");
    }else{
        echo("$url não é uma url válida");
    }
    echo "<br><a href='index.php'>Home</a>";
?>