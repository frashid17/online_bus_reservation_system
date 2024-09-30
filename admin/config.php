<?php
// config.php

// Database connection parameters
define('DB_HOST', 'localhost');    // Database host, usually 'localhost'
define('DB_USER', 'your_username'); // Replace with your database username
define('DB_PASSWORD', 'your_password'); // Replace with your database password
define('DB_NAME', 'bus_reservationsystem'); // Database name

// Create a connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check if the connection was successful
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Optionally, set the character set for the connection
mysqli_set_charset($connection, "utf8");

// Output success message
echo "Connected successfully to the database";

?>
