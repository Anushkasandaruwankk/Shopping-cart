<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$dbname = "kk";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection Failed: ".$conn->connect_error);
}

?> 
