<?php

require_once 'Conexao.php';

$id = $_POST['id_usuario'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

$sql            = "UPDATE usuario SET nome = '{$nome}', sobrenome = '{$sobrenome}', cpf = '{$cpf}' , rg = '{$rg}' WHERE id = $id";

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
