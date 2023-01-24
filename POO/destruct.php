<?php
    class Fruit{
        public $name;
        public $color;
        
        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        function __destruct(){
            echo "Esta fruta é {$this->name} e a cor é {$this->color}.";
        }
    }

    $maca = new Fruit("Maça", "Vermelho");
    echo "<br><a href='index.php'>Home</a>";
?>