<?php

namespace app\controller\cliente;

class InsertCliente
{
    public static function Insert(): bool
    {
        $self = new self;
        $nome = $_POST['nome'];
        $sobre_nome = $_POST['sobre_nome'];
        $cpf = $_POST['cpf'];
        $query = "INSERT INTO cliente (nome, sobre_nome, cpf) values ('{$nome}', '{$sobre_nome}', '{$cpf}');";
        var_dump($query);
        return true;
    }
}