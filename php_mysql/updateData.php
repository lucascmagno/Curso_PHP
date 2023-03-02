<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //query sql
        $sql = "UPDATE convidados SET sobrenome='Doe' where id=2";
        //declaracao preparada
        $stmt = $conn->prepare($sql);
        //executa a query
        $stmt->execute();

        echo $stmt->rowCount() . " Registro(s) atualizado(s) com sucesso";
    }catch(Exception $e){
        //mensagem de erro
        echo $sql . "<br>" . $e->getMessage();
    }
    echo "<br><a href='index.php'>Home</a>";
    $conn = null;
?>