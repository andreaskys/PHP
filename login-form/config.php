<?php

$host = "localhost";
$user = "root";
$password = "Anglo2003@";
$database = "dtfdb";

$conn = new PDO("mysqli($host,$user,$password,$database)");

if($conn-> connect_eror){
    die("Connection failed: ". $conn->connect_error);
}

?>