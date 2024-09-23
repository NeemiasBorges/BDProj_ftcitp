<?php
include('../../funcoes/db_connect.php'); // Conexão ao banco de dados

$sql = "SELECT e.matricula, e.nome, e.data_nasc, e.endereco, e.bairro, e.cidade, e.estado, e.telefone, e.email, f.descricao 
        FROM enfermeiro e 
        INNER JOIN funcao f ON e.cod_funcao = f.id";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../../includes/header.php'); ?>
    <title>Lista de Enfermeiros</title>
</head>
<body>
<div class="container">
    <h2>Enfermeiros Cadastrados</h2>
    <a href="create.php" class="btn btn-success mb-3">Adicionar Enfermeiro</a>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
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
            <?php if ($result->num_rows > 0): ?>
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
                        <td><?php echo $row['descricao']; ?></td>
                        <td>
                            <a href="edit.php?matricula=<?php echo $row['matricula']; ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="delete.php?matricula=<?php echo $row['matricula']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?');">Deletar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="11">Nenhum enfermeiro encontrado</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php include('../../includes/footer.php'); ?>
</body>
</html>
