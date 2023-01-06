<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];

        $media = ($nota1 + $nota2)/2;

        if($media >= 0 && $media < 5){
            $situacao = "Reprovado";
        }else if($media >= 5 && $media < 7){
            $situacao = "Recuperacao";
        }else if($media >=7){
            $situacao = "Aprovado";
        }

        echo "$nota1 + $nota2 sua média é $media, portanto voce esta $situacao";
    ?>
</body>
</html>