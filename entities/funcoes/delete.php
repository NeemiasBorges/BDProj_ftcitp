<?php
include('../../funcoes/db_connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM funcao WHERE id=$id";
    if ($con->query($sql) === TRUE) {
        print('<script> toastr["success"]("Função Excluida com sucesso", "Sucesso")</script>');
        header('Location: list.php'); 
    } else {
        print('<script> toastr["error"]("Erro ao excluir: '.mysqli_connect_error().'", "Sucesso")</script>');
    }
}
?>