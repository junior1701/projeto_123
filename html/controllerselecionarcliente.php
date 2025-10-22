<?php

require_once 'Conexao.php';

$id = $_POST['id_cliente'];

$sql = "SELECT id, nome, sobrenome, cpf, rg, ativo FROM cliente WHERE id = $id";

$cliente = $conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

echo json_encode($cliente);