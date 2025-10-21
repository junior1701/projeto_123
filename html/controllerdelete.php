<?php
require_once 'Conexao.php';

$id = $_POST['id_cliente'];

$sql = "DELETE FROM cliente WHERE id = $id";

$query =  $conexao->exec($sql);

if ($query) {
    echo json_encode(['status' => true, 'msg' => 'Cliente deletado com sucesso!', 'id' => $id]);
    die;
} else {
    echo json_encode(['status' => false, 'msg' => 'Erro ao deletar cliente!', 'id' => 0]);
    die;
}
