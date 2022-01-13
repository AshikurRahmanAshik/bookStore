<!Doctype html>
<html>

<body style="background-color:cornsilk;">

    <?php
    require_once('connection.php');
    $query = <<<SQL
SELECT * FROM  books
SQL;
    $statement = $conn->prepare($query);
    $statement->execute();
    $rows = $statement->fetchAll();
    $books = $rows;
    $x = 0;
    ?>
    <?php foreach ($books as $book) : ?>

        <?php

        if ($book['id'] == $_GET['id']) : ?>
            <table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Available</th>
                    <th>Pages</th>
                    <th>Isbn</th>
                </tr>
                <tr>
                    <td> <?php echo ($book['id']); ?> </td>
                    <td> <?php echo ($book['title']); ?> </td>
                    <td> <?php echo ($book['author']); ?> </td>
                    <td> <?php echo ($book['available']); ?> </td>
                    <td> <?php echo ($book['pages']); ?> </td>
                    <td> <?php echo ($book['isbn']); ?> </td>

                </tr>
            </table>

        <?php $x = 1;
        endif; ?>

    <?php endforeach; ?>
    <?php
    if ($x == 0) : ?>
        <h3> <?php echo 'books not found!'; ?></h3>
    <?php endif; ?>
</body>

</html>