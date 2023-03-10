<?php
    libxml_use_internal_errors(true);
    $myXMLData =
    "<?xml version='1.0' encoding='utf-8'?>
    <document>
    <user>John Doe</wronguser>
    <email>john@example.com</wronegmail>
    </document>
    ";

    $xml = simplexml_load_string($myXMLData);
    if ($xml = false) {
        echo "Falied loading XML: ";
        foreach(libxml_get_errors() as $error){
            echo "<br>", $error->message;
        }
    }else{
        print_r($xml);
    }
?>