<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function getVote(int){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState==4 && this.status==200){
                    document.getElementById("poll").innerHTML = this.responseText;
                }
                xmlhttp.opne("GET", "poll_vote.php?vote="+int, true);;
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
    <div id="poll">
        <h3>Você gosta de PHP e AJAX?</h3>
        <form>
            Sim: <input type="radio" name="vote" id="isim"  value="0" onclick="getVote(this.value)"><br>
            Não: <input type="radio" name="vote" id="inao" value="1" onclick="getVote(this.value)">
        </form>
    </div>
</body>
</html>