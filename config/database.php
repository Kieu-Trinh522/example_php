<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "example_crud";

$conn = mysqli_connect($severname,$username,$password,$database);

if (!$conn) {
    // If connection fails, display the error
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully to the database!";
}

// Close connection
mysqli_close($conn);
?>

