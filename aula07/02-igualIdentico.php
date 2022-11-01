<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual idêntico</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = "3";
        $r = $a === $b ? "SIM":"NAO";
        echo "As variáveis A e B são iguais? $r";
    ?>
</div>
</body>
</html>