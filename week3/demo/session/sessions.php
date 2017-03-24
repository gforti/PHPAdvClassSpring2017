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
            
            $hello = 'hello';
            
            $_SESSION['hello'] = 'hello';
            
            $_SESSION['cart'] = array();
            
            $_SESSION['cart']['product'] = 'mouse';
            $_SESSION['cart']['product1'] = 'mouse1';
            $_SESSION['cart']['product2'] = 'mouse2';
            
            $_SESSION['loggedin'] = true;
            
        ?>
    </body>
</html>
