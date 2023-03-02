<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";      

    echo "<table style='border-collapse: collapse;'>";
    echo "<tr style='border:1px solid black'>
    <th style='border: 1px solid black;padding: 5px;'>ID</th>
    <th style='border: 1px solid black; padding: 5px;'>Nome</th>
    <th style='border: 1px solid black; padding: 5px;'>Sobrenome</th>
    <th style='border: 1px solid black; padding: 5px;'>Email</th>
    <th style='border: 1px solid black; padding: 5px;;'>Data - Time</th>
    </tr>";

    //classe recursiva para construir os elementos da tabela
    class TableRows extends RecursiveIteratorIterator{
        function __construct($it){
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current(){
            return "<td  style='border: 1px solid black; padding: 5px;'>" . parent::current() . "</td>";
        }

        function beginChildren(){
            echo "<tr style='border: 1px solid black; padding: 5px;'>";
        }

        function endChildren(){
            echo "</tr>" . "\n";
        }
    }


    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //seleciona 30 registros do 1-n
        //$sql = "SELECT * FROM convidados LIMIT 3";

        //obter 5 registros no intervalo de 10-n 
        $sql = "SELECT * FROM convidados LIMIT 5 OFFSET 9";
        //sintaxe simplificada
        //$sql = "SELECT * FROM convidados LIMIT 15, 10";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
            echo $v;
        }
    }catch(Exception $e){
        echo $sql . "<br>" . $e->getMessage();
    }

    echo "<br><a href='index.php'>Home</a>";
    $conn = null;
?>