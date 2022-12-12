<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-color: #f5f5f5f5;
            width: 400px;
            text-align: center;
            margin: auto;
        }
    </style>
</head>
<body>
    <div>
    <?php
    echo "<h1>Texto escrito</h1><br>";
    echo $_POST['texto'];
    ?>
    </div>
</body>
</html>