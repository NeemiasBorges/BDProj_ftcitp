<?php
include('header.php');
include('db_connect.php');

$sql = "SELECT * FROM enfermeiro";
$result = $con->query($sql);
?>

<h2>Lista de Enfermeiros</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Função</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['matricula']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['data_nasc']; ?></td>
            <td><?php echo $row['endereco']; ?></td>
            <td><?php echo $row['bairro']; ?></td>
            <td><?php echo $row['cidade']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td><?php echo $row['telefone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['cod_funcao']; ?></td>
            <td>
                <a href="edit_enfermeiro.php?matricula=<?php echo $row['matricula']; ?>" class="btn btn-primary">Editar</a>
                <a href="delete_enfermeiro.php?matricula=<?php echo $row['matricula']; ?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php endwhile; ?>
        <a href="create_enfermeiro.php" class="btn btn-success mb-3">Adicionar Enfermeiro</a>

    </tbody>
</table>

<?php include('footer.php'); ?>
