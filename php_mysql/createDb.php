<?php
//criação da banco de dados em php POO
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "CREATE DATABASE if not exists teste";
    if($conn->query($sql) === true){
        echo "Banco de dados criado com sucesso";
    }else{
        echo "Error" . $sql->error;
    }

    $conn->close();

    echo "<br><a href='index.php'>Home</a>";
?>
<?php
    //criação de banco de dados em PDO
    $username = "localhost";
    $servername = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTRERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE DATABASE teste";
        //use exec() para nenhum resultado retornado
        $conn->exec($sql);
        echo "Database created successfully<br>";
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>