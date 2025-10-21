<?php

require_once 'Conexao.php';

$id             = $_POST['id_cliente'];
$nome_completo  = $_POST['nome'];
$cpf            = $_POST['cpf'];

$sql            = "UPDATE cliente SET nome_completo = '{$nome_completo}', cpf = '{$cpf}' WHERE id = $id";

$query          = $conexao->exec($sql);

if ($query) {

    $response = [
        'msg' => 'Cliente atualizado com sucesso!',
        'status'  => true
    ];
    echo json_encode($response);
    die;
}

$response = [
    'msg' => 'Erro ao atualizar cliente.',
    'status'  => false
];   

echo json_encode($response);