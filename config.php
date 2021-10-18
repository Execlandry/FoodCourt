<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "Food";

$conn = new mysqli($server,$user,$pass,$database);

if($con->connect_error){
    die("connection failed");
}

?>