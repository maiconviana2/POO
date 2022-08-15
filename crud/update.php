<?php

require_once 'db_connection.php';

if($_POST){
    $nome = $_POST['userName'];
    $email = $_POST['userEmail'];
    $id = $_POST['id'];

    $sql = "UPDATE cliente SET name = '$nome', email = '$email' WHERE id = {$id}";
    if($connection->query($sql)=== TRUE){
        echo "Atualizado com sucesso.";
        echo "<a href='edit.php?id=".$id."'><button>Editar</button></a>";
        echo "<a href='index.php'><button>Home</button></a>";
    }else{
        echo "Deu ruim: ".$connection->error;
    }
    
}