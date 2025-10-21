<?php
include 'config.php';
$id = $_POST['id'];
$stmt = $conn->prepare("DELETE FROM clientes WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
// Volta para painel
header("Location: ../adm.php");
exit;
?>
