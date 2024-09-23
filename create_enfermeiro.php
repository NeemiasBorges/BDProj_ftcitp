<?php include('db_connect.php'); ?>
<?php include('header.php'); ?>

<h2>Criar Enfermeiro</h2>
<form action="insert_enfermeiro.php" method="post">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="data_nasc">Data de Nascimento:</label>
        <input type="date" class="form-control" id="data_nasc" name="data_nasc" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" required>
    </div>
    <div class="form-group">
        <label for="bairro">Bairro:</label>
        <input type="text" class="form-control" id="bairro" name="bairro" required>
    </div>
    <div class="form-group">
        <label for="cidade">Cidade:</label>
        <input type="text" class="form-control" id="cidade" name="cidade" required>
    </div>
    <div class="form-group">
        <label for="estado">Estado:</label>
        <input type="text" class="form-control" id="estado" name="estado" required maxlength="2">
    </div>
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="cod_funcao">Função:</label>
        <select class="form-control" id="cod_funcao" name="cod_funcao" required>
            <?php
            $sql = "SELECT * FROM funcao";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['descricao']}</option>";
            }
            ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Criar</button>
</form>

<?php include('footer.php'); ?>
