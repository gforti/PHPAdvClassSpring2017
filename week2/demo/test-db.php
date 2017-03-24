<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            require_once './autoload.php';
            
            $db = new DBSpring();
            $phones = $db->getAllPhones();
            
            
            include './views/view-phones.html.php';
            
            
        ?>
    </body>
</html>
