<?php
    //interface definition
    interface Animale{
        public function makeSound();
    }

    //class definition
    class Cat implements Animale{
        public function makeSound(){
            echo " Meow ";
        }
    }    

    class Dog implements Animale{
        public function makeSound(){
            echo " Bark ";
        }
    }

    class Mouse implements Animale{
        public function makeSound(){
            echo " Squeak ";
        }
    }

    //create a list of Animals
    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();

    $animals = array($cat, $dog, $mouse);
    
    //Tell the animals to make a sound
    foreach($animals as $animal){
        $animal->makeSound();
    }

    echo "<br><a href='index.php'>Home</a>"
?>