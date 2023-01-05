<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            margin: auto;
        }
        tr, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>
<a href="limpar.php">Filtro - Limpar</a><br><br>
<a href="validar_int.php">validar inteiro</a><br>
<a href="filter_0.php">Filtro com 0</a><br>
<a href="endereco_ip.php">Validar ip</a><br>
<a href="endereco_ip.php">Validar endereco_ip</a><br>
<a href="validar_email.php">Limpar e validar email</a><br>
<a href="validar_url.php">Validar Url</a>
</body>
</html>