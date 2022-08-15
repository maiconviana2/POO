<?php
require_once 'db_connection.php';
if($_POST['id']){
    $id = $_POST['id'];
    $sql = "DELETE FROM cliente WHERE id = {$id}";
    if($connection->query($sql) === TRUE){

        header("location: index.php");
        echo "Cliente removido";
    }
}else{
    echo "Algo deu errado.";
}
?>