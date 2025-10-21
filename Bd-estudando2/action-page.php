<?php
//recebe dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$pais = $_POST['pais'];
$senha = $_POST['senha'];


// Conexão com o banco de dados (MySQL/MariaDB)
$conn = new mysqli("localhost", "root", "", "bdteste");

// Verifica conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Define charset para UTF-8
$conn->set_charset("utf8");

// Prepara o comando SQL (use sempre prepared statements se possível)
$sql = $conn->prepare("INSERT INTO clientes (nome, sobrenome, pais) VALUES (?, ?, ?)");
$sql->bind_param("sss", $nome, $sobrenome, $pais);

// Executa e verifica sucesso
if ($sql->execute()) { 
    echo "Cliente cadastrado com sucesso!";
    header("Location: login.html");
    exit;
} else {
    echo "Erro: " . $sql->error;
}

$sql->close();
$conn->close();
?>
