<?php
    echo "<h4>Array idade Codificado</h4>";
    $age = array ("Petter"=> 35, "Ben"=>37, "joe"=>43);
    
    echo json_encode($age);
    echo "<br><BR>";
    foreach ($age as $key => $value){
        echo "$key tem $value <br>";
    }
    //exemplo que codifica um array indexado em uma array JSON
    echo "<br><br><h4>Array Carro Codificado</h4>";
    $cars = array("Volvo","BMW", "Toyota");

    echo json_encode($cars);
    echo "<br><br><a href='index.php'>Home</a>";
?>