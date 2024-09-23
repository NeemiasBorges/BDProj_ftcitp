<?php
include('../../funcoes/db_connect.php'); 

$matricula = $nome = $data_nasc = $endereco = $bairro = $cidade = $estado = $telefone = $email = $cod_funcao = "";
$errors = [];

if (isset($_GET['matricula'])) {
    $matricula = $_GET['matricula'];

    $sql = "SELECT * FROM enfermeiro WHERE matricula = $matricula";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nome = $row['nome'];
        $data_nasc = $row['data_nasc'];
        $endereco = $row['endereco'];
        $bairro = $row['bairro'];
        $cidade = $row['cidade'];
        $estado = $row['estado'];
        $telefone = $row['telefone'];
        $email = $row['email'];
        $cod_funcao = $row['cod_funcao'];
    } else {
        $errors[] = "Enfermeiro não encontrado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cod_funcao = $_POST['cod_funcao'];

    if (empty($nome)) {
        $errors[] = "O campo Nome é obrigatório.";
    }
    if (empty($email)) {
        $errors[] = "O campo Email é obrigatório.";
    }

    if (count($errors) == 0) {
        $sql = "UPDATE enfermeiro 
                SET nome='$nome', data_nasc='$data_nasc', endereco='$endereco', bairro='$bairro', cidade='$cidade', 
                    estado='$estado', telefone='$telefone', email='$email', cod_funcao='$cod_funcao' 
                WHERE matricula=$matricula";
        
        if ($con->query($sql) === TRUE) {
            header('Location: list.php'); 
            exit();
        } else {
            $errors[] = "Erro ao atualizar: " . $con->error;
        }
    }
}

$sql_funcoes = "SELECT * FROM funcao";
$result_funcoes = $con->query($sql_funcoes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../../includes/header.php'); ?>
    <title>Editar Enfermeiro</title>
</head>
<body>
<div class="container">
    <h2>Editar Enfermeiro</h2>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="edit.php">
        <input type="hidden" name="matricula" value="<?php echo $matricula; ?>">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
        </div>
        <div class="form-group">
            <label for="data_nasc">Data de Nascimento:</label>
            <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?php echo htmlspecialchars($data_nasc); ?>">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo htmlspecialchars($endereco); ?>">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo htmlspecialchars($bairro); ?>">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo htmlspecialchars($cidade); ?>">
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" maxlength="2" value="<?php echo htmlspecialchars($estado); ?>">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo htmlspecialchars($telefone); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        </div>
        <div class="form-group">
            <label for="cod_funcao">Função:</label>
            <select class="form-control" id="cod_funcao" name="cod_funcao">
                <option value="">Selecione a Função</option>
                <?php if ($result_funcoes->num_rows > 0): ?>
                    <?php while ($row_funcao = $result_funcoes->fetch_assoc()): ?>
                        <option value="<?php echo $row_funcao['id']; ?>" <?php if ($cod_funcao == $row_funcao['id']) echo 'selected'; ?>>
                            <?php echo $row_funcao['descricao']; ?>
                        </option>
                    <?php endwhile; ?>
                <?php endif; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="list.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php include('../../includes/footer.php'); ?>
</body>
</html>
