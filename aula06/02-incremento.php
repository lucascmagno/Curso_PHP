<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <?php
    /*Esse exercício demonstra o uso de operadores de incremento e de decremento */
        $atual = $_GET["aa"]; //pega o ano atual da url
        #mostra na telo o ano atual
        echo "O ano atual é $atual e o ano anterior é " . --$atual;
    ?>
</div>
</body>
</html>