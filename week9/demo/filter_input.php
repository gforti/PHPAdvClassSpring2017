<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        var_dump($id);
        echo $id;
        ?>
        
        <p>
            <a href="?id=<?php echo mt_rand(), uniqid();?>">uniqid() Generated</a>
        </p>
        <p>
            <a href="?id=<?php echo mt_rand();?>">mt_rand() Generated</a>
        </p>
    </body>
</html>
