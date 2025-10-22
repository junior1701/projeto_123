<?php
require_once 'Conexao.php';

$id = $_POST['id_produto'];

$sql = "DELETE FROM produto WHERE id = $id";

$query =  $conexao->exec($sql);

if ($query) {
    echo json_encode(['status' => true, 'msg' => 'Produto deletado com sucesso!', 'id' => $id]);
    die;
} else {
    echo json_encode(['status' => false, 'msg' => 'Erro ao deletar produto!', 'id' => 0]);
    die;
}
