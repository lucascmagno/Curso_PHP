<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "teste";

    $conn = new mysqli($servername, $username, $password, $bdname);

    if($conn->connect_error){
        echo "Error na conexao: " . $conn->connect_error;
    }  

    $sql = "INSERT INTO convidados VALUES ('','Lucas', 'Chagas', 'lucaschagas@gmail.com','')";

    if($conn->query($sql) === true){
        echo "Dado inserido com sucesso";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    echo "<br><a href='index.php'>Home</a>";
?>