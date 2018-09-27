<?php
$host = "localhost";
$db = "travisaw_personal";
$user = "travisaw_taw";
$pass = "Door1Stop2!";

$conn = new PDO("mysql:host=$host;", $username, $password, $db);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_USE_BUFFERED_QUERY);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
