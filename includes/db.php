<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "lms";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){
    die("Connection error" . $conn->connect_error);
}



?>