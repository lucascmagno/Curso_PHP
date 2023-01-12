<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        tr, th, td{
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "teste";

    $conn = new mysqli($servername, $username, $password, $bdname);

    if($conn->connect_error){
        echo "Falha na conexao: " . $conn->connect_error;
    }

    $sql = "SELECT id, nome, sobrenome FROM convidados";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        //saida de dados por for each row
        echo "<table><tr><th>ID</th><th>Nome</th></tr>";
        while($row = $result->fetch_assoc()){
            //echo "id: " . $row["id"] . " - Name: " . $row["nome"] . " " . $row["sobrenome"] . "<br>";
            echo "<tr><td>".$row["id"] . "</td><td>" .$row["nome"] . " " .$row["sobrenome"] . "</td></tr>";
        }
        echo "</table>";
    }else{
        echo "0 results";
    }

    //$conn->close();

    echo "<br><a href='index.php'>Home</a><br><br>";
?>
</body>
</html>
