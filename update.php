<?php
session_start();
require_once 'conexao.php';

if (isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $idade = mysqli_escape_string($conexao, $_POST['idade']);
    $id = mysqli_escape_string($conexao, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    if (mysqli_query($conexao, $sql)):
        $_SESSION['msg'] = "Actualizado com sucesso";
        header('Location: teste.php');
    else:
        $_SESSION['msg'] = "Erro ao actualizar";
        header('Location: teste.php');
    endif;
endif;