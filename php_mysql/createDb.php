<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "CREATE DATABASE if not exists teste";
    if($conn->query($sql) === true){
        echo "Banco de dados criado com sucesso";
    }else{
        echo "Error" . $sql->error;
    }

    $conn->close();

    echo "<br><a href='index.php'>Home</a>";
?>