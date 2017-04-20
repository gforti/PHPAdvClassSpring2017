<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // phpinfo(); //to see the values
        
        /*
         * Variable in htaccess file must start with HTTP_
         */
        $var = getenv('HTTP_MY_VARIABLE');
        echo $var, '<br />';
        var_dump($var);
        
        echo '<br />', getenv('HTTP_SECRECT_KEY'), '<br />';
        
        $var = getenv('HTTP_I_DONT_EXIST');        
        var_dump($var);
        ?>
    </body>
</html>
