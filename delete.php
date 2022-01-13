<?php
require_once('connection.php');
$id = $_GET['id'];
$query = 'DELETE FROM books WHERE id= :id';
$statement = $conn->prepare($query);
if ($statement->execute(['id' => $id])) {
    header("Location: index.php");
} else {
    echo "id not found!";
}
