<?php

//---------Acrescentar Texto com php

$myfile = fopen("newfile.txt", "a") or die ("Não foi possivel abrir o arquivo!");
$txt = "Pato Donald\n";
fwrite($myfile, $txt);

$txt2 = "King Chaman\n";
fwrite($myfile, $txt2);
fclose($myfile);
$myfile2 = fopen("newfile.txt", "r") or die ("Não foi possivel abrir o arquivo!");

echo fread($myfile2, filesize("newfile.txt"));
fclose($myfile2);