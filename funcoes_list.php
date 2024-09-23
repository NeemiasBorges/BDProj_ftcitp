<?php include('db_connect.php'); ?>
<?php include('header.php'); ?>

<h2>Lista de Funções</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM funcao";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['descricao']}</td>
                    <td>
                        <a href='edit_funcao.php?id={$row['id']}' class='btn btn-warning'>Editar</a>
                        <a href='delete_funcao.php?id={$row['id']}' class='btn btn-danger'>Excluir</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhuma função encontrada</td></tr>";
        }
        ?>
    </tbody>
</table>

<a href="create_funcao.php" class="btn btn-success">Adicionar Função</a>

<?php include('footer.php'); ?>
