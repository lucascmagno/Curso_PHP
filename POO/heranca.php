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

echo "<hr>";

class Fruta{
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro() {
        echo "A fruta é {$this->name} e a cor é {$this->color}.";
    }
}

class Strawberry extends Fruta {
    public function message() {
        echo "Eu sou uma fruta ou um morango? ";
        $this->intro(); 
    }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("morango", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
?>

<?php
    //Herança substituindo métodos herdados
    echo "<hr>";
    class Fru {
        public $nome;
        public $cor;
        public function __construct($nome, $cor){
            $this->nome = $nome;
            $this->cor = $cor;
        }
        public function intro(){
            echo "A fruta é {$this->nome} e a sua cor é {$this->cor}.";
        }
    }
    
    class Mora extends Fru{
        public $peso;
        public function __construct($nome, $cor, $peso){
            $this->nome = $nome;
            $this->cor = $cor;
            $this->peso = $peso;
        }
        public function intro(){
            echo "A fruta é {$this->nome} e a sua cor é {$this->cor}, e o seu peso é {$this->peso} gramas";
        }
    }
    $morango = new Mora("Morango", "vermelho", 50);
    $morango->intro();
    echo "<br><a href='index.php'>Home</a><br>";

    //----------Palavra chave 'final' evita que a classe seja herdada , também evita a substituição do método
    ?>