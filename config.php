<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'gokila_user');
define('DB_PASSWORD', '8883162912');
define('DB_DATABASE', 'gokila_user');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>