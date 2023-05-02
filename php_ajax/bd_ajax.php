<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function showUser(str){
            if(str == ""){
                document.getElementById("txtHint").innerHTML = "";
                return;
            }else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET","getuser.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
    <form>
        <select name="users" id="iusers" onchange="showUser(this.value)">
            <option value="">
                Selecione uma pessoa
            </option>
            <option value="1">
                Lucas Chagas
            </option>
            <option value="2">
                Lucas Doe
            </option>
            <option value="3">
                Luck Magno
            </option>
            <option value="4">
                Luck Magno
            </option>
            <option value="10">
                John Doe
            </option>
        </select>
        <br>
        <div id="txtHint">
            <b>A pessoa informada não está listada aqui...</b>
        </div>
    </form>
    <br>
    <a href="index.php">Home</a>
</body>
</html>