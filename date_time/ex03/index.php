<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
</head>
<body>
    <?php
        $d = mktime(2, 58, 59, 12, 12, 2022);
        echo "Criado em ".date("d-m-Y h:i:sa", $d)
    ?>
</body>
</html>