<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        echo "Falha na conexao: " . $conn->connect_error;
    }

    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO convidados (nome, sobrenome, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $sobrenome, $email);

    //set parameters and execute
    $nome = "John";
    $sobrenome = "Joestar";
    $email = "john@exemplo.com";
    $stmt->execute();

    $nome = "Julie";
    $sobrenome = "Dooley";
    $email = "julie@exemplo.com";
    $stmt->execute();

    echo "Novo registro criado com sucesso!";

    $stmt->close();
    $conn->close();

    echo "<br><a href='index.php'>Home</a>";
?>