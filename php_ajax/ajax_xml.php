<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function showCD(str){
            if (str == ""){
                document.getElementById("txtHint").innerHTML="";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status==200){
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","getcd.php?q="+str, true)
            xmlhttp.send();
        }
    </script>
</head>
<body>
    <form>
        <select name="cds" id="icds" onchange="showCD(this.value)">
            <option value="">Selecione um CD: </option>
            <option value="Bob Dylan">Bod Dylan</option>
            <option value="Bee Gees">Bee Gees</option>
            <option value="Cat Stevens">Cat Stevens</option>
        </select>
    </form>
    <div id="txtHint">
        <b>
            As informações do CD não estão listadas aqui...
        </b>
    </div>
</body>
</html>