<?php
require_once 'db_connection.php';

if($_GET['id']){
    $id = $_GET['id'];

    $sql ="SELECT * FROM cliente WHERE id = {$id}"; 
    $result = $connection->query($sql);
    $data = $result->fetch_assoc();
    $connection->close();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="update.php" method="post">
            <input type="text" name="userName" value="<?=$data['name']?>">
            <input type="text" name="userEmail" value="<?=$data['email']?>">
            <input type="hidden" name="id" value="<?=$data['id']?>">
            <input type="submit" value="Salvar">
            <button><a href="index.php"></a>Voltar</button>
        </form>
    </body>
    </html>
<?php
}
?>