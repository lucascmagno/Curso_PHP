<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        echo "Error: " . $conn->connect_error;
    }

    $last_id = $conn->insert_id;

    $sql = "DELETE FROM `lista` WHERE `lista`.`id` = $last_id";

    if($conn->query($sql) === true){
        //dado inserido com sucesso
    }else{
        echo "Error: " . $sql . $conn->error;
    }


    $conn->close();
    header('Location: index.php');
?>