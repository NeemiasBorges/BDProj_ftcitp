<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cod_funcao = $_POST['cod_funcao'];

    // Atualiza o enfermeiro no banco de dados
    $sql = "UPDATE enfermeiro SET nome = '$nome', data_nasc = '$data_nasc', endereco = '$endereco',
            bairro = '$bairro', cidade = '$cidade', estado = '$estado', telefone = '$telefone',
            email = '$email', cod_funcao = $cod_funcao WHERE matricula = $matricula";

    if ($con->query($sql) === TRUE) {
        header('Location: list_enfermeiro.php'); // Redireciona para a lista de enfermeiros
        exit();
    } else {
        echo "Erro ao atualizar: " . $con->error;
    }
}
?>
