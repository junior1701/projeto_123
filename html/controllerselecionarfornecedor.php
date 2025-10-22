<?php

require_once 'Conexao.php';

$id = $_POST['id_fornecedor'];

$sql = "SELECT id, nome, razao_social, cnpj, ie, ativo FROM fornecedor WHERE id = $id";

$fornecedor = $conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

echo json_encode($fornecedor);