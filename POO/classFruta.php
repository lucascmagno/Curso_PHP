<?php
    class Fruta{
        //propriedades
        public $nome;
        public $cor;

        //Metodos
        function set_nome($nome){
            $this->nome = $nome;
        }
        function get_nome(){
            return $this->nome;
        }

        function set_cor($cor){
            $this->cor = $cor;
        }
        function get_cor(){
            return $this->cor;
        }
    }

    $maca = new Fruta();
    $banana = new Fruta();
    $maca->set_nome('Maca');
    $banana->set_nome('Banana');

    echo $maca->get_nome();
    echo "<br>";
    echo $banana->get_nome();

    $melancia = new Fruta();
    $melancia->set_nome("Melancia");
    $melancia->set_cor("Verde");
    
    echo "<br><br>";
    echo $melancia->get_nome();
    echo "<br>";
    echo $melancia->get_cor();

    //verifica se um objeto pertence a uma classe específica
   //var_dump($maca instanceof Fruta);
   echo "<br><a href='index.php'>Home</a>";
?>