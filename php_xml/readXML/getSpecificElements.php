<?php
    $xml = simplexml_load_file("books.xml") or die ("Error: cannot create object");
    //pega titulo especifico dentro de livro
    echo $xml->book[0]->title . "<br>";
    echo $xml->book[1]->title . "<br>";
    echo $xml->book[2]->title . "<br>";

    echo "<hr>";
    //percorre todos os elementos de book e obtem os valores de title, author, year e price
  
    foreach($xml->children() as $books){
        echo $books->title . ", ";
        echo $books->author . ", ";
        echo $books->year . ", ";
        echo $books->price . "<br>";
    }

    echo "<hr>";
    //obter o valor dos atributos de book, category, e de title, lingua
    //obter o valor dos atributos especificamente
    echo $xml->book[0]['category'] . "<br>";
    echo $xml->book[1]->title['lang'];
    //obter o valor dos atributos com o loop
    echo "<hr>";
    foreach($xml->children() as $books){
        echo $books->title['lang'];
        echo "<br>";
    }
    echo "<br><a href='index.php'>Home</a>";
?>