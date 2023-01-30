<?php
    //usado para métodos herdado em diversas classes
    //como php suporta apneas herança única, o trait permite que um método seja acessivel por diversas classes

    trait message1{
        public function msg1(){
            echo "POO é engraçado";
        }
    }

    class Welcome{
        use message1;
    }

    $obj = new welcome();
    $obj->msg1();

    echo "<br><hr>";
    //Multiplas caracteristicas
    trait message2{
        public function msg2(){
            echo "POO reduz duplicação de código!";
        }
    }

    class Welcome2{
        use message1, message2;
    }

    $object = new Welcome();
    $object->msg1();
    echo "<br>";

    $obj2 = new Welcome2();
    $obj2->msg1();echo"<br>";
    $obj2->msg2();

    echo "<br><br><a href='index.php'>Home</a>";
?>