<?php
include('../../funcoes/db_connect.php'); 

$sql = "SELECT * FROM funcao";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../../includes/header.php'); ?>
    <title>Lista de Funções</title>
</head>
<body>
<div class="container">
    <h2>Funções Cadastradas</h2>
    <a href="create.php" class="btn btn-success mb-3">Adicionar Função</a>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Salário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['descricao']; ?></td>
                        <td><?php echo $row['salario']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?');">Deletar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Nenhuma função encontrada</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php include('../../includes/footer.php'); ?>
</body>
</html>
