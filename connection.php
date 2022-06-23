<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'php1_day10';

// create conection 
$connection = new mysqli($servername,$username,$password,$database);

//check connection 
if($connection->connect_error){
    // echo "Elor";
    die("Connection Failed".$connection->connect_error);
}else{
    echo "Tra Elor";
}
?>