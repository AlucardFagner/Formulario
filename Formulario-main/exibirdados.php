<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>exibir dados</title>
    <h1>Seus dados São:</h1>
    <style>
        *{
            background: #541A64;
        }

        a{
            color: black;
        }
        


    </style>
</head>
</html>

<?php


if (isset($_POST['sobrenome'])) {
    $link = "formulario.html";
    echo "Seu nome é: " . $_POST['nome'];
    echo "<br>";
    echo "Seu sobrenome é: " . $_POST['sobrenome'];
    echo "<br>";
    echo "Seu email é: " . $_POST['email'];
    echo "<br>";
    echo "Seu id é: " . $_POST['id'];
    echo "<br>";
    echo "Sua senha é: " . $_POST['password'];
} else {
    $link = "avaliacao2.html";
    echo "Seu email é: " . $_POST['email'];
    echo "<br>";
    echo "Sua senha é: " . $_POST['password'];
    
}
echo "<br>"

?>
<body>
<a href=<?php echo($link)?>>Voltar</a>
</body>

