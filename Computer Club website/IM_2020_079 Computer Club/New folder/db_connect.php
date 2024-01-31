<?php

$servername = "localhost";
$username = "root";
$password ="";
$db = "computer_club";

// Create connection

$conn = new mysqli($servername, $username, $password, $db);

// Check connection

if ($conn->connect_error){ 
    die("Connection failed: " . $conn->connect_error); 
    echo "DB Connection failed"; 
}

?>