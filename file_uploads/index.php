<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Updloads
    </title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione uma imagem para upload <br>
        <input type="file" name="fileUpload" id="fileUpload"><br><br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>