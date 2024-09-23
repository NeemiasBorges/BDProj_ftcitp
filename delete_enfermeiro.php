<?php
include('db_connect.php');

if (isset($_GET['matricula'])) {
    $matricula = $_GET['matricula'];

    // Deleta o enfermeiro do banco de dados
    $sql = "DELETE FROM enfermeiro WHERE matricula = $matricula";

    if ($con->query($sql) === TRUE) {
        header('Location: list_enfermeiro.php'); // Redireciona para a lista de enfermeiros
        exit();
    } else {
        echo "Erro ao excluir: " . $con->error;
    }
} else {
    header('Location: list_enfermeiro.php');
    exit();
}
?>
