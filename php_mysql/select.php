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
    <h2>Seleção de dados com php POO</h2>
<?php
    //seleção com php POO
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

    $conn->close();
?><br><hr>
<h2>Seleção de dados com php PDO</h2>
<?php
    //select em php PDO
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th></tr>";
    
    class TableRows extends RecursiveIteratorIterator{
        function __construct($it){
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current(){
            return "<td>" . parent::current() . "</td>";
        }

        function beginChildren(){
            echo "<tr>";
        }

        function endChildren(){
            echo "</tr>" . "\n";
        }
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, nome, sobrenome FROM convidados");
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
            echo $v;
        }
    }catch(PDOException $e){
        echo "ERROR: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";

    echo "<br><a href='index.php'>Home</a>"
?>
</body>
</html>
