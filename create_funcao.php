<?php
include('header.php');
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
    $salario = $_POST['salario'];

    $sql = "INSERT INTO funcao (descricao, salario) VALUES ('$descricao', '$salario')";
    if ($con->query($sql) === TRUE) {
        header('Location: funcoes_list.php');
    } else {
        echo "Erro: " . $sql . "<br>" . $con->error;
    }
}
?>

<h2>Adicionar Função</h2>
<form method="post">
    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Salário</label>
        <input type="number" name="salario" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<?php include('footer.php'); ?>
