<?php

echo "<h1>Leitura de arquivo com php</h1>";

echo "<h2>readfile(\"texto.txt\")</h2>";
readfile("texto.txt");

//armazena o arquivo na var $meuarquivo
$meuarquivo = fopen("texto.txt", "r") or die ("Falha ao carregar o arquivo!");
echo "<h2>fopen(\"texto.txt\",\"r\")</h2>";
//Realiza a leitura do arquivo 
echo fread($meuarquivo, filesize("texto.txt"));
fclose($meuarquivo);


$meuarquivoCompleto = fopen("texto.txt","r") or die ("Falha ao carregar o arquivo");
echo "<h2>fread(\"texto.txt\")</h2>";
//realiza a leitura do arqui completa
fread($meuarquivoCompleto, filesize("texto.txt"));
fclose($meuarquivoCompleto);


$meuarquivoLinha = fopen("texto.txt", "r") or die ("Falha ao carregar o arquivo!");

echo "<h2>fopen(\"texto.txt\")</h2>";
//abre a primeira linha do arquivo
echo fgets($meuarquivoLinha);
//obs o cursor passa para a próxima linha do texto
//Fecha o arquivo
fclose($meuarquivoLinha);

$meuarquivoFim = fopen("texto.txt", "r") or die ("Falha ao carregar arquivo!");

//lê o arquivo de linha por linha até o final
//enquanto o texto não chegar ao final, linha por linha será mostrada na tela
echo "<h2>fgets()</h2>";
while(!feof($meuarquivoFim)){
    echo fgets($meuarquivoFim);
}
fclose($meuarquivoFim);

//lê apenas um único caracter
$meuarquivoCaracter = fopen("texto.txt","r") or die ("Falha ao carregar arquivo!");
echo "<h2>fgetc()</h2>";
//imprime cada caracter um por um até chegar ao final do texto
while(!feof($meuarquivoCaracter)){
    echo fgetc($meuarquivoCaracter);
}
fclose($meuarquivoCaracter);

