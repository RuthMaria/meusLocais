<?php

session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $logradouro = mysqli_escape_string($connect, $_POST['logradouro']);
    $complemento = mysqli_escape_string($connect, $_POST['complemento']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $uf = mysqli_escape_string($connect, $_POST['uf']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $data = mysqli_escape_string($connect, $_POST['data']);
    $id = mysqli_escape_string($connect, $_POST['id']);


    $sql = "UPDATE locais SET nome = '$nome', cep = '$cep', logradouro = '$logradouro', complemento = '$complemento', numero = '$numero', bairro = '$bairro', uf = '$uf', cidade = '$cidade', data = '$data' WHERE id='$id'";

    if (mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";

        header('Location: ../index.php');
    endif;
endif;















