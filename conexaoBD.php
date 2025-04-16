<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'pwii';
$conexao = new mysqli($serverName, $userName, $password, $dbName);

if ($conexao->connect_error) {
    die('Conexão com Banco de Dados Falhou:' . $conexao->connect_error);
}
