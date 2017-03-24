<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();

        if (isset($page1)) {
            echo $page1;
        }
        if (isset($_SESSION['page1'])) {
            echo $_SESSION['page1'];
        }
        ?>
    </body>
</html>
