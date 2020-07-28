<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "meuslocais";

$connect = mysqli_connect($servername, $username, $password, $db_name); // conecta com o banco de dados
mysqli_set_charset($connect, "utf8"); // para aceitar acentos nas palavras quando salvar no banco de dados

if (mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;

























