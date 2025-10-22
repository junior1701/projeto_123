<?php

include_once 'Conexao.php';

$pesquisa = $_POST['pesquisa'];
$where = '';

if (!is_null($pesquisa) and !empty($pesquisa)) {
    $where = " WHERE razao_social ILIKE '%{$pesquisa}%' OR cnpj ILIKE '%{$pesquisa}%'";
}

$sql = "SELECT * FROM fornecedor" . $where . " order by id desc";

$query = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$response = [
    'status' => true,
    'data' => $query
];

echo json_encode($response);
