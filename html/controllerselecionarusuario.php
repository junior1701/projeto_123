<?php

require_once 'Conexao.php';

$id = $_POST['id_usuario'];
$sql = "SELECT id, nome, sobrenome, cpf, rg FROM usuario WHERE id = $id";


$cliente = $conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

echo json_encode($cliente);