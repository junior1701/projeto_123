<?php
$usuario = "senac";
$senha = "senac";
$porta = "5432";
$host = "localhost";
$banco = "senac_db";
$dsn = "pgsql:host=$host;port=$porta;dbname=$banco;user=$usuario;password=$senha";

try {
    $conexao = new PDO($dsn, $usuario, $senha); #cria a conexão
} catch (\PDOException $e) { #captura o erro
    echo "Restrição: " . $e->getMessage(); #captura a mensagem de erro
}
$conexao = new PDO($dsn, $usuario, $senha);#cria a conexão