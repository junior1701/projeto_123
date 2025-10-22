<?php

require_once 'Conexao.php';

$id             = $_POST['id_fornecedor'];
$nome           = $_POST['nome'];
$razao_social   = $_POST['razao_social'];
$cnpj           = $_POST['cnpj'];
$ie             = $_POST['ie'];
$ativo          = $_POST['status'];

$sql            = "UPDATE fornecedor SET nome = '{$nome}', razao_social = '{$razao_social}', cnpj = '{$cnpj}', ie = '{$ie}', ativo = '{$ativo}'  WHERE id = $id";

$query          = $conexao->exec($sql);

if ($query) {

    $response = [
        'msg' => 'Fornecedor atualizado com sucesso!',
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