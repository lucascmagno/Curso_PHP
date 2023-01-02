<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//CHECA SE O ARQUIVO DE IMAGEM ESTÁ NO ATUAL 
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
    if($check !== false){
        echo "O arquivo é uma imagem - ". $check["mime"] . ".<br>";
        $uploadOk = 1;
    }else{
        echo "O arquivo não é uma foto.";
        $uploadOk = 0;
    }
}

//checa se a image existe
if (file_exists($target_file)) {
    echo "Desculpe, arquivo já existente<br>";
    $uploadOk = 0;
}
/*  checa o tamanho do arquivo
if($_FILES["fileUpload"]["size"] > 500000){
    echo "Desculpe, seu arquivo é muito grande";
    $uploadOk = 0;
}
*/
/*Permite certos tipos de arquivos
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
    $uploadOk = 0;
}*/

//checa se $uploadOk está definido como 0, erro
if ($uploadOk == 0) {
    echo "Desculpe, seu arquivo não foi carregado.";
    //se tudo estiver ok, tente fazer o upload do arquivo
}else{
    if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)){
        echo "O arquivo" . htmlspecialchars(basename($_FILES["fileUpload"]["name"])) . " foi carregado";
    }else{
        echo "Desculpe, houve um erro ao carregar o arquivo";
    }
}
$imagem = $_FILES["fileUpload"]["name"];
echo "<div style='text-align: center; margin: 20px;'>";
echo "<image src='$target_dir/$imagem' width=500 height=500>";
echo "</div>";
?>