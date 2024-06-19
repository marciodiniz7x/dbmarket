<?php

// Configuração do banco de dados
$servername = "mysql";
$username = "root";
$password = "";
$dbname = "dbmarket";

// Cria a conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Obtém os dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

// Prepara a instrução SQL
$sql = "INSERT INTO tb_user (name, email, number) VALUES ('$name', '$email', '$number')";

//Executa a instrução SQL
if ($conexao->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

// fecha a conexão
$conexao->close();