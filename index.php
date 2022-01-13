<!DOCTYPE html>
<html>

<head>
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        div {
            text-align: center;
        }
    </style>
    <title>Book Database</title>
</head>

<body>
    <?php

    require_once('connection.php');
    $query = <<<SQL
    SELECT * FROM  books
    SQL;
    $statement = $conn->prepare($query);
    $statement->execute();
    $rows = $statement->fetchAll();
    $books = $rows;
    ?>
    <br> <br>

    <center>
        <h1 class="center"> Books Database</h1>
    </center>

    <table class="center" border='1' ;>
        <caption>
            <button> <a href="form.php"> Search</a></button>
            <button> <a href="addbookform.php"> Add Books</a></button>
            <button><a href="deleteform.php"> Delete Book</a></button>
        </caption>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Pages</th>
            <th>ISBN</th>
            <th>Available</th>
        </tr>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td> <?php echo ($book['id']); ?> </td>
                <td> <?php echo ($book['title']); ?> </td>
                <td> <?php echo ($book['author']); ?> </td>
                <td> <?php echo ($book['pages']); ?> </td>
                <td> <?php echo ($book['isbn']); ?> </td>
                <td> <?php echo $book['available'] ? "available" : "not available"; ?> </td>
            <?php endforeach; ?>
    </table>

</body>

</html>