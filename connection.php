<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6465331";
$password = "33rrVL4kiB";
$dns = "mysql:host=$servername;dbname=sql6465331";
$conn;
try {
    $conn = new PDO($dns, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
