<?php
require_once "db_connection.php";
?>

<div class="cliente_container">
    <?php
    $sql = "SELECT * FROM cliente";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
    <span>" . $row["id"] . "</span>
    <span>" . $row["name"] . "</span>
    <span>" . $row["email"] . "</span>
    <a href='edit.php?id=" . $row['id'] . "'><button type='button'>Editar</button></a>
    <a href='delete.php?id=" . $row['id'] . "'><button type='button'>Remover</button></a><br>
    ";
        }
    } else {
        echo "Nenhum cliente cadastrado.";
        echo "<a href='cadastro.php'><button>Cadastrar novo cliente</button></a>";
    }
    ?>
</div>