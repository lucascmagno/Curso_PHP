<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operações aritiméticas</title>
</head>
<body>
<div>
    <?php
        //Pega os valores da url
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        $media = ($n1 + $n2) / 2;
        echo "A soma vale ".($n1+$n2);
        echo "<br>A subtração vale ".($n1-$n2);
        echo "<br>A multiplicação vale ".($n1*$n2);
        echo "<br>A divisão vale ".($n1/$n2);
        echo "<br>O módulo vale ".($n1%$n2);
        echo "<br>A media vale ".$media;
    ?>
</div>
</body>
</html>