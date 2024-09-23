<?php
include('../../funcoes/db_connect.php');

if (isset($_GET['matricula'])) {
    $matricula = $_GET['matricula'];
    $sql = "DELETE FROM enfermeiro WHERE matricula = $matricula";
    
    if ($con->query($sql) === TRUE) {
        header('Location: list.php'); 
        exit(); 
    } else {
        echo '<script> toastr["error"]("Erro ao excluir: ' . $con->error . '", "Erro")</script>';
    }
} else {
    header('Location: list.php');
    exit();
}
?>
