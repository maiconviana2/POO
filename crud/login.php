<?php
require_once 'db_connection.php';
?>

<form action="" method="post">
    <input type="text" name="user">
    <input type="text" name="userPassword">
    <input type="submit" value="Entrar">
</form>

<?php
if($_POST){
    $user = $_POST['user'];
    $userPassword = $_POST['userPassword'];

    $sql = "SELECT * FROM cliente";
    $result = $connection->query($sql);
    if($result->num_rows >0){
        $row = $result->fetch_assoc();
        if($row['user'] != $user && $row['password'] != $userPassword){
            echo "Credenciais incorretas.";
        }else{
            header("Location: index.php");
        }
    }else{
        echo "Ocorreu um erro: ".$sql.$connetion->connect_error;        
    }
}