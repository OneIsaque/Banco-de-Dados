<?php
session_start();
if(!isset($_SESSION['adm'])) { die("Acesso negado!"); }
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$pais = $_POST['pais'];
include 'config.php'; // conexão

$sql = $conn->prepare("INSERT INTO clientes (nome, sobrenome, pais) VALUES (?, ?, ?)");
$sql->bind_param("sss", $nome, $sobrenome, $pais);
$sql->execute();
echo "Cliente cadastrado!";
?>
