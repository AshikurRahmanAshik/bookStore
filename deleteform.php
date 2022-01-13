<!DOCTYPE html>
<html>
    <head>
    <style>
            form { 
                margin: 0 auto; 
                width:250px;
            }
    </style>
    </head>

    <body>
        <form action="delete.php" method="get">
            <h3>Enter Book ID to Delete</h3>
            <input type="text" name="id" placeholder="Book ID">
            <input type="submit" value="submit" onClick="javascript:return confirm('are you sure delete this?');">
        </form>
    </body>
</html>