<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th{
            border: 1px solid black;
            padding: 5px;
        }

        th{
            text-align: left;
        }
    </style>
</head>
<body>

    <?php
        $q = intval($_GET["q"]);

        $conn = mysqli_connect('localhost', 'root', '');
        if(!$conn){
            die('Could not connect: ' . mysqli_error($conn));
        }

        mysqli_select_db($conn, "teste");
        $sql = "SELECT * FROM convidados WHERE id = '" .$q. "'";
        $result = mysqli_query($conn, $sql);
        echo "<table>
<tr>
<th>Nome</th>
<th>Sobrenome</th>
<th>email</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['nome'] . "</td>";
  echo "<td>" . $row['sobrenome'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
    ?>
</body>
</html>