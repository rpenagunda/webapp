<?php
$servername = "localhost";
$username = "webapp";
$password = "webapp1234";
$dbname = "webapp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>