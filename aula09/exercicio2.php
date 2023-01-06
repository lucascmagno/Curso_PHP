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
     $a = isset($_GET["ano"]) ?$_GET["ano"]:1900;

     $i = date("Y") - $a;

     echo "Voce nasceu em $a e tem $i anos";

     if($i < 16){
        $tipovoto = "nao vota";
     }else if(($i >= 16 && $i < 18) || ($i > 65)){
            $tipovoto = "Voto opcional";
        }else{
            $tipovoto = "Voto obrigatorio";
        }
     echo "<br>Para essa idade, $tipovoto";
    ?>
</body>
</html>