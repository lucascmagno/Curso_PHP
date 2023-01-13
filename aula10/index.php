<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio1.php" method="get">
        Número: <input type="number" name="num" id="inum">
        <fieldset>
            <input type="radio" name="oper" id="dobro" value="1" checked>
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" value="2" id="cubo">
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" value="3" id="raiz">
            <label for="raiz">Raiz quadrada</label>
        </fieldset>
        <input type="submit" value="calcular">
    </form>
    <br><br><br><br>
    <a href="ex02.php">exercicio 2</a>
</body>
</html>