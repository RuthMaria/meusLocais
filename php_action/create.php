<?php

session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $logradouro = mysqli_escape_string($connect, $_POST['logradouro']);
    $complemento = mysqli_escape_string($connect, $_POST['complemento']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $uf = mysqli_escape_string($connect, $_POST['uf']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $data = mysqli_escape_string($connect, $_POST['data']);

    $sql = "INSERT INTO locais (nome, cep, logradouro, complemento, numero, bairro, uf, cidade, data) VALUES ('$nome', '$cep', '$logradouro', '$complemento', '$numero', '$bairro', '$uf', '$cidade', '$data')";

    if (mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";

        header('Location: ../index.php');
    endif;
endif;















