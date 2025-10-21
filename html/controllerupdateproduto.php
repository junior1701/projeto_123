<?php

require_once 'Conexao.php';

$nome = $_POST['nome'];
$compra = $_POST['compra'];
$venda = $_POST['venda'];
$grupo = $_POST['grupo'];
$marca = $_POST['marca'];

$sql  = "UPDATE produto SET nome_produto = '{$nome}', valor_compra = '{$compra}' , valor_venda = '{$venda}', grupo = '{$grupo}', marca = '{$marca}' WHERE id = $id";

$query  = $conexao->exec($sql);

if ($query) {

    $response = [
        'msg' => 'Produto atualizado com sucesso!',
        'status'  => true
    ];
    echo json_encode($response);
    die;
}

$response = [
    'msg' => 'Erro ao atualizar produto.',
    'status'  => false
];   

echo json_encode($response);