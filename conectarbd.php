<?php
$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "admin";
$dbname = "db_venusta";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
if (!$conn) {
    die("Conexão falhou: ". mysqli_connect_error());
}
?>


