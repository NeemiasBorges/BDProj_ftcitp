<?php
include('../functions/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descricao = $_POST['descricao'];
    $salario = $_POST['salario'];

    $sql = "INSERT INTO funcao (descricao, salario) VALUES ('$descricao', '$salario')";
    if ($conn->query($sql) === TRUE) {
        echo "Nova função adicionada com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../includes/header.php'); ?>
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
<?php include('../includes/footer.php'); ?>
</body>
</html>