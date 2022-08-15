<?php
require_once 'create.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <form action="create.php" method="post">
        <input type="text" name="name">
        <input type="text" name="userEmail">
        <input type="text" name="user">
        <input type="password" name="userPassword">
        <input type="submit" value="Cadastrar">

    </form>

</body>

</html>