<?php
include('../functions/db_connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM funcao WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Função excluída com sucesso";
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
}
?>