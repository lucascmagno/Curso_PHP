<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        echo "Error: " . $conn->connect_error;
    }

    $sql = "SELECT nome FROM lista";
    if($conn->query($sql) === TRUE){
        echo "Error: " . $sql . $conn->error;
    }
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        //saida de dados por for each row
        while($row = $result->fetch_assoc()){
            //echo "id: " . $row["id"] . " - Name: " . $row["nome"] . " " . $row["sobrenome"] . "<br>";
            echo "<tr><ul><td><li>" .$row["nome"] . "</td></il></tr>";
            echo "<input type='checkbox' id='check'>";
        }
    }else{
        echo "0 results";
    }
    $conn->close();
?>