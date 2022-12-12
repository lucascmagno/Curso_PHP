<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
        div{
            display: flex;
            flex-direction: column;
            line-height: 30px;
            padding: 10px;
            width: 50vw;
            margin: auto;
            background-color: lightgrey;
            border: 1px solid black;
            align-items: center;
        }
        p.coment{
            margin: 0;
            outline: 0;
            width: 80%;
            background-color: white;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Comentários</h1>
    <div>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="inome">nome: </label>
        <input type="text" name="nome" id="inome" value="<?php echo $_POST["nome"];?>"><br>

        <label for="iemail">Email: </label>
        <input type="email" name="email" id="iemail" value="<?php echo $_POST["email"];?>"><br>

        <label for="itexto">Escreva um comentário:</label><br>
        <textarea name="texto" id="itexto" cols="30" rows="10"><?php echo $_POST["texto"];?></textarea><br>
        <input type="submit" value="enviar">
    </form>
    </div>
    <div>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $nome = addAtributes($_POST["nome"]);
                $email = addAtributes($_POST["email"]);
                $texto = addAtributes($_POST["texto"]);
            }
            function addAtributes($dado){
                $dado = trim($dado);
                $dado = stripslashes($dado);
                $dado = htmlspecialchars($dado);
                return $dado;
            }

            echo "Nome: ".$nome."<br>";
            echo "E-mail: ".$email."<br>";
            echo "comentário: <p class='coment'>".$texto."</p>";
        ?>
    </div>
</body>
</html>