<?php

require_once 'Conexao.php';

$id = $_POST['id_cliente'];

$sql = "SELECT id, nome_completo, cpf FROM cliente WHERE id = $id";

$cliente = $conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

echo json_encode($cliente);