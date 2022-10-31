<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Variáveis variantes</title>
</head>
<body>
<div>
    <?php
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X é <strong>$x</strong>";
        echo"<br>A variável criada recebeu o valor <strong>$abc</strong>";
    ?>
</div>
</body>
</html>