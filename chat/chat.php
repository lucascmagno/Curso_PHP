<?php
    $user = $_POST["user"];
    $senha = $_POST["senha"];

    if ($user != "lucas" || $senha != "12345") {
        $error = "usuario ou senha incorretos!";
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="chat.css">
</head>
<body>
    <h1>Bem vindo ao chat</h1>
    
    <div>
        <form action="comentar.php" method="post">
            <h2>Comentar algo</h2>
            <textarea name="texto">
            </textarea><br>
            <input type="submit" value="Enviar" class="enviar">
        </form>
    </div>
</body>
</html>