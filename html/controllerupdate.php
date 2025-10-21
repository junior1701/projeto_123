<?php

require_once 'Conexao.php';

$id             = $_POST['id_cliente'];
$nome           = $_POST['nome'];
$sobrenome      = $_POST['sobrenome'];
$cpf            = $_POST['cpf'];
$rg             = $_POST['rg'];
$ativo          = $_POST['status'];

$sql            = "UPDATE cliente SET nome = '{$nome}', sobrenome = '{$sobrenome}', cpf = '{$cpf}', rg = '{$rg}', ativo = '{$ativo}'  WHERE id = $id";

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