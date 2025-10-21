<?php
include 'config.php';
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$pais = $_POST['pais'];
$stmt = $conn->prepare("INSERT INTO clientes (nome, sobrenome, pais) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $sobrenome, $pais);
$stmt->execute();
// Volta para painel
header("Location: ../adm.php");
exit;
?>
