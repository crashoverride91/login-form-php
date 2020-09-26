<?php

$sname = "localhost";
$username = "root";
$password = "root991";


$db_name = "users";
$conn  = mysqli_connect($sname, $username,$password, $db_name);

if(!$conn){
     echo "connection failed!";
}