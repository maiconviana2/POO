<?php

$db_host = 'localhost';
$db_name = 'cadastro_cliente';
$db_pass = '';
$db_table = 'cliente';
$db_user = 'root';


$connection = new mysqli($db_host, $db_user, $db_pass, $db_name);

// if($connection->connect_error){
//     die("Connection error ". $connection->connect_erro);
// }else{
//     echo "Successfully connected";
// }