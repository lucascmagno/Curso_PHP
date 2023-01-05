<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação avançada</title>
</head>
<body>
    <?php
    $url = "https://www.w3schools.com";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("$url is a valid URL with a query string");
    } else {
        echo("$url is not a valid URL with a query string");
    }
    ?><br><br>
    <a href="remover_caracter.php">remover_caracter com valor ASCII > 127</a>
</body>
</html>