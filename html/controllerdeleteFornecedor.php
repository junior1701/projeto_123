<?php
require_once 'Conexao.php';
$id = $_POST['id_fornecedor'];

$sql = "DELETE FROM fornecedor WHERE id = $id";

$query =  $conexao->exec($sql);

if ($query) {
    echo json_encode(['status' => true, 'msg' => 'Fornecedor deletado com sucesso!', 'id' => $id]);
    die;
} else {
    echo json_encode(['status' => false, 'msg' => 'Erro ao deletar Fornecedor!', 'id' => 0]);
    die;
}
