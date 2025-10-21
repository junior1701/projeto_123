<?php

include_once 'Conexao.php';

$pesquisa = $_POST['pesquisa'];
$where = '';

if (!is_null($pesquisa) and !empty($pesquisa)) {
    $where = " WHERE nome_produto ILIKE '%{$pesquisa}%' OR valor_compra ILIKE '%{$pesquisa}%' OR valor_venda ILIKE '%{$pesquisa}%' OR grupo ILIKE '%{$pesquisa}%' OR marca ILIKE '%{$pesquisa}%'";
}

$sql = "SELECT * FROM produto" . $where;

$query = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$response = [
    'status' => true,
    'data' => $query
];

echo json_encode($response);
