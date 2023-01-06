<?php
    $strings = ["maca", "laranja", "banana", "coco"];
    $lengths = array_map( function($item){ return strlen($item);}, $strings);
    print_r($lengths);
    
    echo "<br><br><a href='index.php'>Home</a>";
?>