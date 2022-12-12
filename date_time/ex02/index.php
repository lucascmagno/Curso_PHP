<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Times</title>
</head>
<body>
    <?php
      /*
        H - formato de 24 horas de uma hora (00 a 23)
        h - formato de 12 horas de uma hora com zeros à esquerda (01 a 12)
        i - Minutos com zeros à esquerda (00 a 59)
        s - Segundos com zeros à esquerda (00 a 59)
        a - Minúsculas Ante Meridiem e Post Meridiem (am ou pm)
      */  
      date_default_timezone_set("Brasil");
      echo "O tempo é ".date("H:i:sa");
    ?>
</body>
</html>