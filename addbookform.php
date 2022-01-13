<?php
require_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $books = '';

    $data = array(
        'id' => $_POST['id'],
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'pages' => $_POST['pages'],
        'available' => $_POST['available'],
        'isbn' => $_POST['isbn']
    );

    $query = "
        INSERT INTO books (title, author,available, pages, isbn)
        VALUES (:title, :author, :available , :pages, :isbn)";
    $statement = $conn->prepare($query);
    $params = [
        'title' => $data['title'],
        'author' => $data['author'],
        'available' => $data['available'],
        'pages' => $data['pages'],
        'isbn' => $data['isbn']
    ];
    if ($statement->execute($params)) {
        header("Location: index.php");
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <style>
        form {
            margin: 0 auto;
            width: 250px;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        <h3>Add Book </h3>
        <label for="">Title</label>
        <input style="margin-bottom: 20px; margin-left: 40px;" type="text" name="title" required>
        <br>
        <label for="">Author</label>
        <input style="margin-bottom: 20px;margin-left: 25px;" type="text" name="author" required>
        <br>
        <label for="">Available</label>
        <input style="margin-bottom: 20px;margin-left: 10px;" type="text" name="available" required>
        <br>
        <label for="">Pages</label>
        <input style="margin-bottom: 20px;margin-left: 30px;" type="text" name="pages" required>
        <br>
        <label for="">ISBN</label>
        <input style="margin-bottom: 20px;margin-left: 30px;" type="text" name="isbn" required>

        <input style="margin-bottom: 10px;" style="width: 100px;margin-top: 10px;" type="submit" value="Submit" required>
    </form>
</body>

</html>