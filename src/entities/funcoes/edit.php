<?php
include('../functions/db_connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM funcao WHERE id=$id";
    $result = $conn->query($sql);
    $funcao = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $salario = $_POST['salario'];

    $sql = "UPDATE funcao SET descricao='$descricao', salario='$salario' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Função atualizada com sucesso";
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
    <h2>Editar Função</h2>
    <form method="POST" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $funcao['id']; ?>">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $funcao['descricao']; ?>" required>
        </div>
        <div class="form-group">
            <label for="salario">Salário</label>
            <input type="number" class="form-control" id="salario" name="salario" value="<?php echo $funcao['salario']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
<?php include('../includes/footer.php'); ?>
</body>
</html>