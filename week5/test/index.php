<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $endpoint = filter_input(INPUT_GET, 'endpoint');
        
        echo $endpoint;
        ?>
    </body>
</html>
