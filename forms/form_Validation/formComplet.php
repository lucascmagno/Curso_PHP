<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Exemplo de Validação de Formulário php</h1>
    <p style="color: red;">* Espaço obrigatório</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="inome">Nome: </label>
        <input type="text" name="nome" id="inome" value="<?php echo $_POST["nome"];?>"><span>*</span><br><br>

        <label for="iemail">Email: </label>
        <input type="email" name="email" id="iemail" value="<?php echo $_POST["email"];?>"><span>*</span><br><br>

        <label for="iwebsite">Website</label>
        <input type="text" name="website" id="iwebsite" value="<?php echo $_POST["website"];?>"><span></span><br><br>

        <label for="itexto">Comentário</label>
        <textarea name="comentario" id="itexto" cols="30" rows="10"><?php echo $_POST["comentario"];?></textarea><br><br>

        <label for="igenero">Gênero: </label>

        <label for="ifeminino">Feminino</label>
        <input type="radio" name="genero" id="ifeminino" <?php if(isset($genero) && $genero=="feminino") echo "checked";?> value="feminino">

        <label for="imasculino">Masculino</label>
        <input type="radio" name="genero" id="imasculino" value="masculino" <?php if(isset($genero) && $genero == "masculino") echo "checked";?>>
        
        <label for="ioutro">Outro</label>
        <input type="radio" name="genero" id="ioutro" value="outro" <?php if(isset($genero) && $genero == "outro") echo "checked";?>><span>* </span>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <h1>Seu input: </h1>
    <?php
        $nome = $email = $genero = $comentario = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            # code...
            $nome = test_input($_POST["nome"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comentario = test_input($_POST["comentario"]);
            #$genero = test_input($_POST["genero"]);
        }

        function test_input($dado){
            $dado = trim($dado);
            $dado = stripslashes($dado);
            $dado = htmlspecialchars($dado);
            return $dado;
        }
        echo $nome."<br>";
        echo $email."<br>";
        echo $comentario."<br>";
        echo $genero."<br>";
    ?>
    <?php
        //Validação e mensagens de erro
        // define variables and set to empty values
         $nomeErr = $emailErr = $generoErr = $websiteErr = "";

        $nome = $email = $genero = $comentario = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            # code...
            #se for vazio imprime campo obrigarório
            if (empty($_POST["nome"])){
                $nomeErr = "Nome obrigatório";
            }else{
                $nome = test_input($_POST["nome"]);
                if(!preg_match("/^[a-zA-Z-' ]*$/",$nome)){
                    $nomeErr = "Apenas letras e espaços em branco";
                }
            }

            if(empty($_POST["email"])){
                $emailErr = "Email obrigatório";
            }else{
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    # code...
                    $emailErr = "Formato de email invalido";
                }
            }

            if(empty($_POST["website"])){
                $websiteErr = "";
            }else{
                $website = test_input($_POST["website"]);
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){

                }
            }

            if(empty($_POST["comentario"])){
                $comentario = "";
            }else{
                $comentario = test_input($_POST["comentario"]);
            }
            if(empty($_POST["genero"])){
                $genero = "Genero é obrigatório";
            }else{
                $genero = test_input($_POST["genero"]);
            }
        }
    ?>
</body>
</html>