<?php
    /*class greeting{
        public static function welcome(){
            echo "Hello World!";
        }
    }
    //chama o método estático
    greeting::welcome();
    */
    //método estático sendo acessado na mesma classe

    class greeting{
        public static function welcome(){
            echo "Hello world";
        }
        public function __construct(){
            self::welcome();
        }
    }

    class SomeOtherClass{
        public function message(){
            greeting::welcome();
        }
    }

    new greeting();

    //chamar método estático de uma classe filha
    class domain{
        protected static function getWebSiteName(){
            return "W3Schools.com";
        }
    }
    
    class domainW3 extends domain{
        public $webSiteName;
        public function __construct(){
            $this->webSiteName = parent::getWebSiteName();
        }
    }
    $domainW3 = new domainW3;
    echo "<br>";
    echo $domainW3->webSiteName;

    echo "<br><a href='index.php'>Home</a>";
?>