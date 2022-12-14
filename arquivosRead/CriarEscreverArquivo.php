<?php

//cria um arquivo chamado "arquivoTeste.txt"
$meuarquivo = fopen("arquivoTeste.txt","w");

//Gravar em arquivo fwrite
$meuarquivoGravar = fopen("newfile.txt", "w") or die ("Arquivo nçao encontrado ou já criado!");

$txt = "Luck CP9<br>\n";

fwrite ($meuarquivoGravar, $txt);

$txt2 = "John Doe\n" ;
fwrite($meuarquivoGravar, $txt2);

fclose($meuarquivoGravar);

//----------Exibe o conteúdo de new file na tela
$meuarquivo = fopen("newfile.txt", "r") or die ("Falha ao carregar o arquivo!");

echo fread($meuarquivo, filesize("texto.txt"));
fclose($meuarquivo);
