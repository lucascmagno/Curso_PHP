<?php
    //classe abstrata contém pelo omenos um método abstrato, método declarado mas não implementado no código

    abstract class ParentClass{
        abstract public function someMethod1();
        abstract public function someMethod2($name, $color);
        abstract public function someMethod3() : string;
    }

    //exemplo de classe abstrata

    //Parent class
    abstract class Car{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
        abstract public function intro() : string;
    }

    //child classes / classes filhas
    class Audi extends Car{
        public function intro() : string{
            return "Choose German quality! I'm an $this->name!";
        }
    }
    class Volvo extends Car{
        public function intro() : string{
            return "Proud to be Swedish! I'm a $this->name";
        }
    }

    class Citroen extends Car{
        public function intro() : string{
            return "French extravagance! I'm a $this->name!";
        }
    }

    //Create Objects from the child classes
    $audi = new Audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $citroen = new Citroen("Citroen");
    echo $citroen->intro();
    echo "<hr>";

    //exemplo  de classe com parâmetros opcionais
    abstract class ParentCl{
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentCl{
        public function prefixName($name, $separator = ".", $greate = "Dear"){
            if($name == "John Doe"){
                $prefix = "Mr";
            }elseif($name == "Jane Doe"){
                $prefix = "Mrs";
            }else{
                $prefix = "";
            }
            return "{$greate} {$prefix}{$separator} {$name}";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe");
    echo "<br>";
    echo $class->prefixName("Jane Doe");
?>