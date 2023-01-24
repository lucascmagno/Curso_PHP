<?php
    class Fruit{
        public $name; //publico
        protected $color; //protegido
        private $weight; //privada

        function set_name($name){ //funcao publica (default)
            $this->name = $name;
        }

       function set_color($color){ //funcao protegida
            $this->color = $color;
        }

        function set_weight($weight){ //funcao privada
            $this->weight = $weight;
        }

        function __destruct(){
            echo "Nome: " . $this->name."<br>";
            echo "Cor: " . $this->color."<br>";
            echo "Peso:" . $this->weight;
        }
    }   

    $manga = new Fruit();
    $manga->set_name('Manga'); //ok
    $manga->set_color('Yellow'); //ERROR
    $manga->set_weight('300');//ERROR

    echo "<br><a href='index.php'>Home</a><br>";
?>