<?php

require("inc/connecta.php");


// Receber dados do formulário
$email = $_POST['usuario'];
$password = $_POST['senha'];

// Consulta para verificar se o usuário existe no banco
$sql = "SELECT * FROM cliente WHERE EMAIL = '$email' and SENHA = '$password'";


$result = mysqli_query($conn, $sql);

// Verificar resultado da consulta
if (mysqli_num_rows($result) > 0) {
    // Usuário encontrado, direcionar para a página restrita
    header("location: index.html");
} else {
    // Usuário não encontrado, mostrar mensagem de erro
    echo "Usuário ou senha inválidos";
}

// Fechar conexão
mysqli_close($conn);