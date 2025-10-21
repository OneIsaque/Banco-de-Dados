<?php
include 'config.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$pais = $_POST['pais'];
$stmt = $conn->prepare("UPDATE clientes SET nome=?, sobrenome=?, pais=? WHERE id=?");
$stmt->bind_param("sssi", $nome, $sobrenome, $pais, $id);
$stmt->execute();
// Volta para painel
header("Location: ../adm.php");
exit;
?>
