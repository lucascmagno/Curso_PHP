<?php
//cria um arquivo chamado "arquivoTeste.txt"
$texto = $_POST["texto"];

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
        <h2>Comentários</h2>
       <div class="comentario">
           <?php
                echo "<li>$texto";
            ?>
       </div>
    </div>
    <a href="index.php">Início</a>
    <a href="chat.php">Chat</a>
</body>
</html>