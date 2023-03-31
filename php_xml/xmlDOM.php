<?php
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("note.xml");

    print $xmlDoc->saveXML();
    echo "<hr>";

    $x = $xmlDoc->documentElement;
    foreach ($x->childNodes as $item){
        print $item->nodeName . " = " . $item->nodeValue . "<br>";
    }

echo "<br><a href='index.php'>Home</a>";