<?php
$host = "localhost";
$user = "root"; // Change if using a different user
$pass = "";
$db_name = "skillcrafters"; // Change this to your database name

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>