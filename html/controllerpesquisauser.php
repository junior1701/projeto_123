<?php

include_once 'Conexao.php';

$pesquisa = $_POST['pesquisa'];
$where = '';

if (!is_null($pesquisa) and !empty($pesquisa)) {
    $where = " WHERE nome_completo ILIKE '%{$pesquisa}%' OR cpf ILIKE '%{$pesquisa}%' OR email ILIKE '%{$pesquisa}%'";
}

$sql = "SELECT * FROM usuario" . $where;

$query = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$response = [
    'status' => true,
    'data' => $query
];

echo json_encode($response);
