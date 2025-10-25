<?php
include './php/config.php';
$result = $conn->query("SELECT * FROM clientes");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Painel Administrativo</title>
</head>
<body>
    <h3>Painel Administrativo</h3>
    
    <form method="post" action="php/inserir.php"> <!-- ajuste o action para seu inserir correto -->
        <input type="text" name="nome" placeholder="Nome" required>

        <input type="text" name="sobrenome" placeholder="Sobrenome" required>
        
        <select name="pais" required>
            <option value="australia">Austrália</option>
            <option value="canada">Canadá</option>
            <option value="usa">Estados Unidos</option>
            <option value="brazil">Brasil</option>
            <option value="portugal">Portugal</option>
        </select>
        <input type="submit" value="Adicionar Cliente">
    </form>

    <button><a href="php/atualizar_cliente.php">Atualizar Tabela Cliente</a></button>

    <!-- Lista dos clientes (preenchido com PHP) -->
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>País</th>
            <th>Ações</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['sobrenome']; ?></td>
            <td><?php echo $row['pais']; ?></td>
            <td>
                <form style="display:inline;" action="php/editar_cliente.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="submit" value="Editar">
                </form>
                <form style="display:inline;" action="php/excluir_cliente.php" method="post" onsubmit="return confirm('Tem certeza?');">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="submit" value="Excluir">
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
