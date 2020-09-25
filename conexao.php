<?php
$_servername = "localhost"; //padrão do server local
$database = "curso_estoque"; //alterar conforme o banco de dados
$username = "root"; //por padrão é root
$password = ""; //senha de conexão ao banco de dados
//creando conexão
$conexao = mysqli_connect($_servername, $username, $password, $database);

?>