<?php
    namespace Html;

    class Table{
        public $titl="";
        public $numRows = 0;
        public function message(){
            echo "<p>Table '{$this->title}' tem {$this->numRows} linhas</p>";
        }
    }
    $table = new Table();
    $table->title = "Minha tabela";
    $table->numRows = 5;

    use Html as H;
    $table2 = new H\table();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $table->message();
    ?>
</body>
</html>