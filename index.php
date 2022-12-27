<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .votar{
            display: flex;
            align-items: flex-end;
            background-color: lightblue;
            height: 400px;
            width: 40%;
            margin: auto;
        }
        .votar button{
            height: 30px;
            width: 150px;
            border: none;
            color: white;
        }
        button:hover{
            cursor: pointer;
        }
        button:nth-child(1){
            background-color: green;
        }
        button:nth-child(2){
            background-color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        include('votar.php');
    ?>
    <div class="votar">
        <button name="voto">Confirmar</button>
        <button>Cancelar</button>
    </div>
</body>
</html>