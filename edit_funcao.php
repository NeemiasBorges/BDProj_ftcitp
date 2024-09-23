<?php
include('db_connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM funcao WHERE id = $id";
    $result = $con->query($sql);
    $funcao = $result->fetch_assoc();
} else {
    header('Location: funcoes_list.php');
    exit();
}
?>

<?php include('header.php'); ?>
<h2>Editar Função</h2>
<form action="update_funcao.php" method="post">
    <input type="hidden" name="id" value="<?php echo $funcao['id']; ?>">
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $funcao['descricao']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

<?php include('footer.php'); ?>
