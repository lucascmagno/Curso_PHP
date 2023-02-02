<?php
    //inserção de dados em php POO
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "teste";

    $conn = new mysqli($servername, $username, $password, $bdname);

    if($conn->connect_error){
        echo "Error na conexao: " . $conn->connect_error;
    }  

    $sql = "INSERT INTO convidados VALUES ('','Lucas', 'Chagas', 'lucaschagas@gmail.com','')";

    if($conn->query($sql) === true){
        echo "Dado inserido com sucesso";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    echo "<br><a href='index.php'>Home</a>";
?>
<?php
    //inserção de dados em php PDO
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    try{
        $conn = new PDO ("mysql:host=$servername; dbname =$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO convidados VALUES ('','Lucas', 'Chagas', 'lucaschagas@gmail.com')";

        $conn->exec($sql);
        echo "Novo registro criado com sucesso!";
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>