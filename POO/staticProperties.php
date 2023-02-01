<?php
    class pi{
        public static $value = 3.14159;
        public function staticValue(){
            return self::$value;
        }
    }

    //Get static property
    //echo pi::$value;
    $pi = new pi();
    echo $pi->staticValue();
    //chamando uma propriedade estática de dentro de uma classe filha
    class filha extends pi{
        public function filhaStatic(){
            return parent::$value;
        }
    }
    //Pega o valor da propriedade estática 
    echo "<br>";
    echo filha::$value;
    //ou pega o valor da propriedade estática via filhaStatic() metodo
    $filha = new filha();
    echo filha->filhaStatic();
    echo "<br><a href='index.php'>Home</a>";
?>