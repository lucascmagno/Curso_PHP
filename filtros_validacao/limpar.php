<?php
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;
    echo "<br><a href='index.php'>home</a>";
    echo "<br><a href='filter_0.php'>Filtro com 0</a>";
?>