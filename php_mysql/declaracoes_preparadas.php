<?php
    //desclarações preparadas em php POO
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        echo "Falha na conexao: " . $conn->connect_error;
    }

    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO convidados (nome, sobrenome, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $sobrenome, $email);

    //set parameters and execute
    $nome = "John";
    $sobrenome = "Joestar";
    $email = "john@exemplo.com";
    $stmt->execute();

    $nome = "Julie";
    $sobrenome = "Dooley";
    $email = "julie@exemplo.com";
    $stmt->execute();

    echo "Novo registro criado com sucesso!";

    $stmt->close();
    $conn->close();

    echo "<br><a href='index.php'>Home</a>";
?>
<?php
    //instruções preparadas em php PDO
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //prepara sql e bind parâmetro
        $stmt = $conn->prepare("INSERT INTO convidados (nome, sobrenome, email) VALUES (:nome, :sobrenome, :email)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);

        //insere uma linha
        $nome = "Luck";
        $sobrenome = "Voltia";
        $email = "luckvoltia@example.com";
        $stmt->execute();

        //insere outra linha
        $nome = "Julie";
        $sobrenome = "Dooley";
        $email = "juliredooley@example.com";
        $stmt->execute();

        echo "Novo registro criado com sucesso!";
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
?>