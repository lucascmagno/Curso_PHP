<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        echo "Error na conexao: " . $conn->connect_error;
    }
    //cria tabela lista no banco de dados
    $sql = "CREATE TABLE lista(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        data date,
        hora time,
        estado tinyint 
    )DEFAULT charset=utf8";
    
    if($conn->query($sql) === TRUE){
        
    }else{
        echo "ERROR: " . $sql . $conn->error;
    }

    $nome = $_POST["nome"];

    $sqlAdd = "INSERT INTO lista (nome) VALUES  ('$nome')";
    if($conn->query($sqlAdd) === TRUE){
        echo "ERROR: " . $sqlAdd . $conn->error;
    }
    
    $conn->close();
    header('Location: index.php');