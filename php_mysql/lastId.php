<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        echo "Error na conexao: " . $conn->connect_error;
    }

    $sql = "INSERT INTO convidados (nome, sobrenome, email) VALUES ('Luck', 'Magno', 'luckmagno@gmail.com')";
    
    if($conn->query($sql) === true){
        $last_id = $conn->insert_id;
        echo "Novo registro criado com sucesso. Último id inserido é: " .$last_id;
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn-> close();

    echo "<br><a href='index.php'>Home</a>";
?>