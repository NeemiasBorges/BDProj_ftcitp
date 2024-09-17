<?php 

$DATABASE_NAME     = DB_NAME; 
$DATABASE_USER     = DB_USER; 
$DATABASE_PASS = DB_PASSWORD; 
$DATABASE_HOST     = DB_HOST; 

$con      = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
 print('<script> toastr["error"]("Falha em conectar com o banco'.mysqli_connect_error().'", "Sucesso")</script>');
 die();
}else{
 print('<script> toastr["success"]("Sucesso ao conectar com o Banco", "Sucesso")</script>');
}

define( 'DB_CHARSET',  'utf8' );

?>