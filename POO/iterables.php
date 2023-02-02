<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error){
        echo "Error: " . $conn->connect_error;
    }
?>