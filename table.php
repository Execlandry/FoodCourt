<?php

//SQL query to create table
require_once('config.php');

$s= "CREATE TABLE Users(id integer(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
username Varchar(225) NOT NULL,email varchar(225) NOT NULL,password varchar(255) NOT NULL)";

$sql = "CREATE TABLE Form(Rollnum integer(30) PRIMARY KEY NOT NULL,Name VARCHAR(30) NOT NULL,DOB date not null,Gender Varchar(10) not null,
Email VARCHAR(30) NOT NULL,Address VARCHAR(30) NOT NULL,
School VARCHAR(30) NOT NULL,Department VARCHAR(30) NOT NULL,Course VARCHAR(30) NOT NULL,Contact VARCHAR(30) NOT NULL)";

if($conn->query($s)==true){
    echo "Table Form created successfully <br>";
}
if($conn->query($sql)==true){
    echo "Table Users created successfully";
}

else{
    echo "Error" .mysqli_error($conn);
    
}

?>