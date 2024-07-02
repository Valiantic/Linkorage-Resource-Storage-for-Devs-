<?php

// database connection indicator
// $connections = mysqli_connect("localhost","root","","db_linkorage");
//     if(mysqli_connect_errno()) {
//         echo "Failed to connect to MySQL " .mysqli_connect_error();
//     }
//     // else {
//     //     echo "connected"; 
//     // }
   

// different approach

$host = "localhost";
$user = "root";
$password = "";
$db = "db_linkorage";


$data = mysqli_connect($host, $user, $password, $db);
if ($data === false) {
    die("Connection error: " . mysqli_connect_error()); // Include the error message
}

?>