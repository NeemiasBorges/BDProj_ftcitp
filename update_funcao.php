<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];

    // Atualiza a função no banco de dados
    $sql = "UPDATE funcao SET descricao = '$descricao' WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        header('Location: funcoes_list.php'); // Redireciona para a lista de funções
        exit();
    } else {
        echo "Erro ao atualizar: " . $con->error;
    }
}
?>
