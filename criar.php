<?php
session_start();
require_once 'conexao.php';

if (isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $idade = mysqli_escape_string($conexao, $_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if (mysqli_query($conexao, $sql)):
        $_SESSION['msg'] = "Cadastrado com sucesso";
        header('Location: teste.php');
    else:
        $_SESSION['msg'] = "Erro ao cadastrar";
        header('Location: teste.php');
    endif;
endif;