<?php
    //conexão com php POO, orientada a objetos
    $servername = "localhost";
    $username = "root";
    $password = "";
    //cria conexão
    $conn = new mysqli($servername, $username, $password);
    //checa conexão
    if($conn->connect_error){
        die("Falha na conexão: " . $conn->connect_error);
    }
    echo "Connected successfully";
    //fecha a conexão
    $conn->close();
?>
<?php
    //conexão com php precedural mysqli
    $servername = "localhost";
    $username = "root";
    $password = "";
    //cria conexão
    $conn = mysqli_connect($servername, $username, $password);
    //checa conexão
    if(!$conn){
        die("Falha na conexão: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    //fecha a conexão
    mysqli_close($conn);
?>
<?php
    //conexão em php com PDO
    $servername = "localhost";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql: host= $servername; dbname=teste", $username, $password);
        //define o error do PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected succesfully";
    }catch(PDOException $e){
        echo "Connected failed: " . $e->getMessage();
    }
    //fecha a conexão
    $conn = null;
?>