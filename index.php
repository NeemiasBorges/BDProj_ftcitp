<?php
include('./funcoes/db_connect.php');

$sql = "SELECT * FROM funcao";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./includes/header.php'); ?>
</head>
<body>
<div class="container">
    <center>
        <h2>Navegue pela Navbar</h2>
    </center>
</div>
<?php include('./includes/footer.php'); ?>
</body>
</html>