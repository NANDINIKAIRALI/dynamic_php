<?php
// config.php
$servername = "localhost";
$username = "root";  // use your MySQL username
$password = "";      // use your MySQL password
$dbname = "blog_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
