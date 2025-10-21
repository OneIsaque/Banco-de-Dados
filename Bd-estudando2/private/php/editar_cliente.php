<?php
include 'config.php';
$id = $_POST['id'];
$stmt = $conn->prepare("SELECT * FROM clientes WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <h2>Editar Cliente</h2>
    
    <form action="atualizar_cliente.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br>
        Sobrenome: <input type="text" name="sobrenome" value="<?php echo $row['sobrenome']; ?>"><br>
        País:
        <select name="pais">
            <option <?php if($row['pais']=='australia') echo 'selected'; ?> value="australia">Austrália</option>
            <option <?php if($row['pais']=='canada') echo 'selected'; ?> value="canada">Canadá</option>
            <option <?php if($row['pais']=='usa') echo 'selected'; ?> value="usa">Estados Unidos</option>
            <option <?php if($row['pais']=='brazil') echo 'selected'; ?> value="brazil">Brasil</option>
            <option <?php if($row['pais']=='portugal') echo 'selected'; ?> value="portugal">Portugal</option>
        </select><br>
        <input type="submit" value="Atualizar">
    </form>
    <a href="../adm.php">Voltar ao Painel</a>
</body>
</html>
