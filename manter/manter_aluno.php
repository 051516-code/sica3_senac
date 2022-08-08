<?php
require('conexao.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];


$sql = "INSERT INTO aluno(nome, cpf, endereco, complemento, cep, bairro, cidade, estado, telefone)
VALUES('$nome', '$cpf', '$endereco', '$complemento', '$cep', '$bairro', '$cidade', '$estado', '$telefone')";


if(!mysqli_query($conexao, $sql)){
    die ("Operação Falhou!");
}

mysqli_close($conexao);

header("Location: ../cadastro_aluno.html");
