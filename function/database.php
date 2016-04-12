<?php
// Handle database connection initialisation
function db_connect() {

    // Define connection as a static variable, to avoid connecting more than once 
    static $connection;

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
        $servername = "localhost";
        $username = "webapp";
        $password = "webapp1234";
        $dbname = "webapp";

        $connection = mysqli_connect($servername, $username, $password, $dbname);
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error(); 
    }
    return $connection;
}

// Handle database query
function db_query($query) {
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    return $result;
}

// Handle database connection error
function db_error() {
    $connection = db_connect();
    return mysqli_error($connection);
}
?>