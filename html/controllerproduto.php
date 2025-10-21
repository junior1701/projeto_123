<?php
require_once'Conexao.php';

$nome = $_POST['nome'];
$compra = $_POST['compra'];
$venda = $_POST['venda'];
$grupo = $_POST['grupo'];
$marca = $_POST['marca'];

$sql = "INSERT INTO produto (nome_produto, valor_compra, valor_venda, grupo, marca) VALUES ('{$nome}','{$compra}', '{$venda}','{$grupo}', '{$marca}')";

$result = $conexao->exec($sql);
if ($result) {
    $response = [
      'msg' => 'Produto cadastrado com sucesso!',
      'status' => true
    ];
    echo json_encode($response);
    die;
};
$response = [
    'msg' => 'Restrição em fazer o cadastro!',
    'status' => false,
];
    echo json_encode($response);
