
<?php


require("inc/connecta.php");




$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$id = $_POST['id'];
$senha = $_POST['password'];

$sql = "INSERT INTO cliente (NOME, SOBRENOME, EMAIL, CPF, SENHA)
VALUES ('$nome', '$sobrenome', '$email', '$id', '$senha')";

if ($conn->query($sql) === TRUE) {
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

