<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cod_funcao = $_POST['cod_funcao'];

    // Insere o enfermeiro no banco de dados
    $sql = "INSERT INTO enfermeiro (nome, data_nasc, endereco, bairro, cidade, estado, telefone, email, cod_funcao)
            VALUES ('$nome', '$data_nasc', '$endereco', '$bairro', '$cidade', '$estado', '$telefone', '$email', $cod_funcao)";

    if ($con->query($sql) === TRUE) {
        header('Location: list_enfermeiro.php'); // Redireciona para a lista de enfermeiros
        exit();
    } else {
        echo "Erro ao inserir: " . $con->error;
    }
}
?>
