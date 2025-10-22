<?php

require_once 'Conexao.php';

$id = $_POST['id_produto'];

$sql = "SELECT id, nome_produto, valor_compra, valor_venda, grupo, marca FROM produto WHERE id = $id";

$cliente = $conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

echo json_encode($cliente);