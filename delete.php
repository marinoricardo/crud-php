<?php
session_start();
require_once 'conexao.php';

if (isset($_POST['btn-deletar'])):

    $id = mysqli_escape_string($conexao, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if (mysqli_query($conexao, $sql)):
        $_SESSION['msg'] = "Excluido com sucesso";
        header('Location: teste.php');
    else:
        $_SESSION['msg'] = "Erro ao excluir";
        header('Location: teste.php');
    endif;
endif;