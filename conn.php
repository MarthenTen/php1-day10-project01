<?php

$comnect = new mysqli('localhost','root','','php1_day10');

if (!$comnect->connect_error){
       echo "tra eror";
}  else{
    echo"ada error";
}

?>