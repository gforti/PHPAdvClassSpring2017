<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $a = 'abc' . 123;
        if ( ctype_alnum($a) ) {
            echo "<p>$a is alphanumeric</p>";
        }
        
        $a = '123';
        if ( ctype_digit($a) ) {
            echo "<p>$a is string numeric</p>";
        }
        
         $a = 'asdf';
        if ( ctype_alpha($a) ) {
            echo "<p>$a is alphabetic</p>";
        }
        ?>
    </body>
</html>
