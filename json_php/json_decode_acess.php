<?php
    $jsonobj = '{"Peter":35, "Ben":37, "Joe":43}';

    $obj = json_decode($jsonobj);

    echo "<h3>Acessar os valores decodificados</h3><br>";
    echo $obj->Peter . "<br>";
    echo $obj->Ben . "<br>";
    echo $obj->Joe . "<br>";

    $jsonobj2 = '{"Peter": 35, "Ben":37, "Joe":43}';
    $arr = json_decode($jsonobj2, true);
    echo "<br><br><h3>Acessar valores de um array associativo</h3><br>";
    echo $arr["Peter"] . "<br>";
    echo $arr["Ben"] . "<br>";
    echo $arr["Joe"] . "<br>";

    echo "<br><br><h3>com laco foreach</h3>";
    foreach ($obj as $key => $value){
        echo "<br>$key tem $value anos";
    }

    echo "<br><br><a href='index.php'>Home</a>";
?>