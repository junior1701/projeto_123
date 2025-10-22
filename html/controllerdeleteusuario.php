<?php
require_once 'Conexao.php';

$id = $_POST['id_usuario'];

$sql = "DELETE FROM usuario WHERE id = $id";

$query =  $conexao->exec($sql);

if ($query) {
    echo json_encode(['status' => true, 'msg' => 'Usuario deletado com sucesso!', 'id' => $id]);
    die;
} else {
    echo json_encode(['status' => false, 'msg' => 'Erro ao deletar o usuario!', 'id' => 0]);
    die;
}
