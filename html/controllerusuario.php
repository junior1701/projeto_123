<?php
require_once'Conexao.php';

$nome_completo = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuario (nome_completo, cpf, email, senha) VALUES ('{$nome_completo}', '{$cpf}', '{$email}', '{$senha}')";

$result = $conexao->exec($sql);
if ($result) {
    $response = [
      'msg' => 'Usuario cadastrado com sucesso!',
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
