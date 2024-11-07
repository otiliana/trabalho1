<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'sistema_login';
$porta = 7306;

$conexao = new mysqli($host, $usuario, $senha, $banco, $porta);
if ($conexao->connect_error) {
die("Erro na conexão: " . $conexao->connect_error);
}
?>