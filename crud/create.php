<?php
require_once 'db_connection.php';

if ($_POST) {
    $userName = $_POST['name'];
    $userEmail = $_POST['userEmail'];
    $user = $_POST['user'];
    $userPassword = $_POST['userPassword'];

    $sql = "INSERT INTO cliente (name, email, user, password) VALUES ('$userName','$userEmail','$user','$userPassword')";

    if ($connection->query($sql) === TRUE) {
        header('location: index.php ');
    } else {
        echo 'Ocorreu um erro: ' . $sql . ' ' . $connection->connect_error;
    }
}else{
    echo " <p class='alert-text'>Preencha os campos.</p>";
}
