<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $a = isset($_GET["ano"]) ?$_GET["ano"]:1900;

        $i = date("Y") - $a;

        echo "Voce nasceu em $a e tem $i anos";
        if($i >= 18){
            $v = "ja pode votar";
            $d = "ja pode dirigir";
        }else{
            $v = "nao pode votar";
            $d = "nao pode dirigir";
        }
        echo "<br>Com essa idade voce $v e também $d";
    ?>
</body>
</html>