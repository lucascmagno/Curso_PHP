<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form{
            width: 600px;
            margin: auto;
        }
        fieldset{
            height: 200px;
            padding: 15px;
        }
        h1{
            text-align: center;
        }
        input{
            margin: 8px 0px;
            padding: 4px;
            width: 150px;
        }
        #submit{
            border: none;
            cursor: pointer;
            box-shadow: 1px 1px 2px black;
        }
    </style>
    <title>Chat</title>
</head>
<body>
    <h1>Faça Login para acessar o chat</h1>
    <form action="chat.php" method="POST">
        <fieldset>
            <span></span>
            <legend>Login</legend>
            <label for="iuser">Usuário: </label>
            <input type="text" name="user" id="iuser"><br>
            <label for="isenha">Senha: </label>
            <input type="password" name="senha" id="isenha"><br>
            <input type="submit" value="Enviar" id="submit">
        </fieldset>
    </form>
</body>
</html>