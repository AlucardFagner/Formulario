
<?php

session_start();
require("inc/connecta.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['password'];

$sql1 = "INSERT INTO cliente (NOME, SOBRENOME, EMAIL, CPF, SENHA)
VALUES ('$nome', '$sobrenome', '$email', '$cpf', '$senha')";

$sql2 = "INSERT INTO sorteio (CPF) VALUES ('$cpf')";




if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {

    
    header("location: login.html");
} else {
    echo "Erro ao inserir dados: " . $conn->error;
    header("location: formulario.html");
}

$conn->close();

?>
<!-- <body>
<a href=<?php echo($link)?>>Voltar</a>
</body> -->

