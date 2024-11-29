<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'crudlistar');

$conexao = mysqli_connect(HOST, USER, PASS, BASE) or die ('Não foi possível conectar');
?>