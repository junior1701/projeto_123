<?php
require_once'Conexao.php';

$nome = $_POST['nome'];
$razao_social = $_POST['razao_social'];
$cnpj = $_POST['cnpj'];
$ie = $_POST['ie'];

$sql = "INSERT INTO fornecedor (nome, razao_social, cnpj, ie) VALUES ('{$nome}', '{$razao_social}','{$cnpj}', '{$ie}')";

$result = $conexao->exec($sql);
if ($result) {
    $response = [
      'msg' => 'Fornecedor cadastrado com sucesso!',
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
