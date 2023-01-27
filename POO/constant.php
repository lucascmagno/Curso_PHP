<?php
    //acessando uma constante fora da classe
    class Adeus{
        const DEIXANDO_MENSAGEM = "Obrigado(a) por visitar este site";
    }
    echo Adeus::DEIXANDO_MENSAGEM;
    
    //acessando uma constante de dentro da classe
    echo "<hr>";
    class Goodbye{
        const LEAVING_MESSAGE = "Obrigado por visitar este site!";
        public function byebye(){
            echo self::LEAVING_MESSAGE;
        }
    }
    $goodbye = new Goodbye();
    $goodbye->byebye();
    echo "<br><a href='index.php'>Home</a>";
?>