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
                Peter Griffin
            </option>
            <option value="2">
                Lois Griffin
            </option>
            <option value="3">
                Joseph Swanson
            </option>
            <option value="4">
                Glenn Quagmire
            </option>
        </select>
        <br>
        <div id="txtHint">
            <b>A pessoa informada não está listada aqui...</b>
        </div>
    </form>
</body>
</html>