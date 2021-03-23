<?php
// Conexao com o Banco de Dados
$servername = "localhost";
$username = "root";
$password = "marino1234";
$database = "crud";


$conexao = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conexao, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexao" .mysqli_connect_error();
endif;
