<?php
include('../../funcoes/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST['descricao'];
    $salario = $_POST['salario'];

    $sql = "INSERT INTO funcao (descricao, salario) VALUES ('$descricao', '$salario')";
    if ($con->query($sql) === TRUE) {
        print('<script> toastr["success"]("Nova função adicionada com sucesso", "Sucesso")</script>');
    } else {
        print('<script> toastr["error"]("Erro: '.mysqli_connect_error().'", "Sucesso")</script>');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../../includes/header.php'); ?>
</head>
<body>
<div class="container">
    <h2>Adicionar Função</h2>
    <form method="POST" action="create.php">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" required>
        </div>
        <div class="form-group">
            <label for="salario">Salário</label>
            <input type="number" class="form-control" id="salario" name="salario" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>
<?php include('../../includes/footer.php'); ?>
</body>
</html>