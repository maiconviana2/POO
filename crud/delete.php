<?php
require_once 'db_connection.php';

if($_GET['id']){
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id = {$id}";
    $result = $connection->query($sql);
    $data = $result->fetch_assoc();  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover cliente</title>
</head>
<body>
    <h3>Deseja mesmo remover este cliente?</h3>
    <form action="remove.php" method="post">
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <input type="submit" value="Sim">
        <a href="index.php"><button>Não</button></a>
    </form>
</body>
</html>