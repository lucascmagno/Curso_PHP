<?php
//pegar último ID em php POO
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
<?php
    //pegar o último ID em php PDO
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO convidados (nome, sobrenome, email) VALUES ('Luck', 'Magno', 'luckmagno@gmail.com')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        echo "Novo registro criado com sucesso. Último Id inserido é: " . $last_id;
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>