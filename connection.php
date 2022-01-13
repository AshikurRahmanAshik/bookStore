<?php
$servername = "localhost";
$username = "root";
$password = "";
$dns = "mysql:host=$servername;dbname=asik";
$conn;
try {
    $conn = new PDO($dns, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
