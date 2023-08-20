<?php
session_start();
$sname = "localhost";
$username = "root";
$password = "";
$db_name = "hihi";
$conn = mysqli_connect($sname, $username, $password, $db_name); 

if (!$conn){
    echo "Connection failed";
}