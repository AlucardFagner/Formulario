<?php



require("inc/connecta.php");




function gerarNumeroAleatorio($min, $max) {
    return rand($min, $max);
}


$numeroAleatorio = gerarNumeroAleatorio(100000000, 100000000000);

$cpf = $_POST['cpf'];
$cupom = $_POST['codigo'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];



if ($cupom > 0) {
    $sql = "SELECT * FROM sorteio WHERE CODIGO = $cupom";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>
        alert('Cupom já registrado!');
        window.location.href='cupom.html';
        </script>";
    } else {  
        $sql = "INSERT INTO sorteio (CODIGO, CPF) VALUE ($cupom, $cpf)";
        if (mysqli_query($conn, $sql)) {
            echo "Cupom registrado com sucesso!";

        } else {
            echo "Erro ao registrar o cupom: " . mysqli_error($conn);
        }
    }
}




?>