<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista</title>
</head>
<body>
    <h1>Adicionar tarefa</h1>
    <section id="addtask">
        <form action="addTask.php" method="post">
            <label for="inome">Tarefa</label>
            <input type="text" name="nome" id="inome">
            <input type="submit" value="Add" id="submit">
        </form>
    
    </section>
    <span><hr></span>

    <h1>Tarefas</h1>
    <section id="task">
        <?php include('tasks.php')?>
    </section>
    <span><hr></span>
</body>
</html>