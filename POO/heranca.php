<?php
    class Fruit{
        public $name;
        public $color;
        
        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "a fruta é {$this->name} e a sua cor é {$this->color}.<br><br>";
        }
    }

    //Morangi herda da classe Fruit
    class Morango extends Fruit{
        public function message(){
            echo "Eu sou una fruta ou um morango?<br>";
        }
    }

    $morango = new Morango("Morango", "vermelho");
    $morango->message();
    $morango->intro();

    echo "<a href='index.php'>Home</a><br>";
?>