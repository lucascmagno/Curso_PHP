<?php
    function printIterable(iterable $myIterable){
        foreach($myIterable as $item){
            echo  $item;
        }
    }

    $arr = ["a", "b", "c"];
    printIterable($arr);

    //retorna iterável
    echo "<br>";
    function getIterable():iterable{
        return ["a", "b", "c"];
    }

    $myIterable = getIterable();
    foreach($myIterable as $item){
        echo $item;
    }
?>
<?php
    echo "<br>";
    //cria o iterator
    class MyIterator implements Iterator{
        private $items = [];
        private $pointer = 0;

        public function __construct($items){
            //array_values() que garante que as chaves sejam números
            $this->items = array_values($items);
        }

        public function current(){
            return $this->items[$this->pointer];
        }

        public function key(){
            return $this->pointer;
        }

        public function next(){
            $this->pointer++;
        }

        public function rewind(){
            $this->pointer = 0;
        }

        public function valid(){
            //count() indica quantod items estão na lista
            return $this->pointer < count($this->items);
        }
    }

    //uma função que usa itaráveis
    function printIterable2(iterable $myIterable){
        foreach($myIterable as $item){
            echo $item;
        }
    }
    //usa o iterador as an iterable
    $iterator = new MyIterator(["a", "b", "c"]);
    printIterable2($iterator);

    echo "<br><a href='index.php'>Home</a>";
?>