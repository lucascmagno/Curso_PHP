<?php
    //criação de tabelas em php POO
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste"; //nome do banco de dados

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    //sql para criacao de tabela
    $sql = "CREATE TABLE convidados(
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nome VARCHAR(30) NOT NULL,
      sobrenome VARCHAR(30) NOT NULL,  
      email VARCHAR(50),
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  
    )";

    if($conn->query($sql) === true){
        echo "Tabela convidados criada com sucesso";
    }else{
        echo "Error na criacao da tabela: " . $conn->error;
    }

    $conn->close();

    echo "<br><a href='index.php'>Home</a>";
?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    try{
        $conn = new PDO("mysql: host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //sql para a criação da tabela
        $sql = "CREATE TABLE convidados(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(30) NOT NULL,
            sobrenome VARCHAR(30) NOT NULL,  
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  
        )";
        $conn->exec($sql);
        echo "Tabela convidados criada com sucesso!";
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>