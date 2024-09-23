<?php
include('db_connect.php');

if (isset($_GET['matricula'])) {
    $matricula = $_GET['matricula'];
    $sql = "SELECT * FROM enfermeiro WHERE matricula = $matricula";
    $result = $con->query($sql);
    $enfermeiro = $result->fetch_assoc();
} else {
    header('Location: enfermeiros_list.php');
    exit();
}
?>

<?php include('header.php'); ?>
<h2>Editar Enfermeiro</h2>
<form action="update_enfermeiro.php" method="post">
    <input type="hidden" name="matricula" value="<?php echo $enfermeiro['matricula']; ?>">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $enfermeiro['nome']; ?>" required>
    </div>
    <div class="form-group">
        <label for="data_nasc">Data de Nascimento:</label>
        <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?php echo $enfermeiro['data_nasc']; ?>" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $enfermeiro['endereco']; ?>" required>
    </div>
    <div class="form-group">
        <label for="bairro">Bairro:</label>
        <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $enfermeiro['bairro']; ?>" required>
    </div>
    <div class="form-group">
        <label for="cidade">Cidade:</label>
        <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $enfermeiro['cidade']; ?>" required>
    </div>
    <div class="form-group">
        <label for="estado">Estado:</label>
        <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $enfermeiro['estado']; ?>" required maxlength="2">
    </div>
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $enfermeiro['telefone']; ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $enfermeiro['email']; ?>" required>
    </div>
    <div class="form-group">
        <label for="cod_funcao">Função:</label>
        <select class="form-control" id="cod_funcao" name="cod_funcao" required>
            <?php
            $sql = "SELECT * FROM funcao";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
                $selected = ($row['id'] == $enfermeiro['cod_funcao']) ? 'selected' : '';
                echo "<option value='{$row['id']}' $selected>{$row['descricao']}</option>";
            }
            ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

<?php include('footer.php'); ?>
