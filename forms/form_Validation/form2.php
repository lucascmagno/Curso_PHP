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
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label for="inome">Nome: </label>
        <input type="text" name="nome" id="inome"><span>*</span><br>

        <label for="iemail">Email: </label>
        <input type="email" name="email" id="iemail"><span>*</span><br>

        <label for="iwebsite">Website</label>
        <input type="text" name="website" id="iwebsite"><br>

        <label for="itexto">Comentário</label>
        <textarea name="texto" id="itexto" cols="30" rows="10"></textarea><br>

        <label for="">Gênero: </label>

        <label for="ifeminino">Feminino</label>
        <input type="radio" name="feminino" id="ifeminino">

        <label for="imasculino">Masculino</label>
        <input type="radio" name="masculino" id="imasculino">
        
        <label for="ioutro">Outro</label>
        <input type="radio" name="outro" id="ioutro"><span>*</span>
        <br>
        <input type="submit" value="Enviar">
        <h1>Seu input: </h1>
        
    </form>
</body>
</html>