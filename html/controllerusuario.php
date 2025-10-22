<?php
require_once'Conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuario (nome, sobrenome, cpf, rg, senha) VALUES ('{$nome}', '{$sobrenome}', '{$cpf}', '{$rg}', '{$senha}')";

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
