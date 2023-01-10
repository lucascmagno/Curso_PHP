<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        echo "Falha na conexão: " . $conn->connect_error;
    }

    $sql = "INSERT INTO convidados VALUES ('','John', 'Doe', 'john@exemplo.com','');";

    $sql .= "INSERT INTO convidados VALUES ('Mary', 'Moe', 'mary@example.com', '');";

    $sql .= "INSERT INTO convidados  VALUES ('','Julie', 'Dooley', 'julie@example.com','')";

    if($conn->multi_query($sql) === true){
        echo "Novo registro inserido com sucesso";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    echo "<br><a href='index.php'>Home</a>"
?>