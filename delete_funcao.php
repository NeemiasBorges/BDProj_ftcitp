<?php
include('db_connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM funcao WHERE id=$id";
    if ($con->query($sql) === TRUE) {
        header('Location: funcoes_list.php');
    } else {
        echo "Erro ao excluir: " . $con->error;
    }
} else {
    header('Location: funcoes_list.php');
}
?>
