<?php 

define( 'DB_NAME',     'clinica' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8' );

$table_prefix = 'tbl';

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


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


?>