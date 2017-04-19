<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // secure flag works only for https, so it will not work on this page since it's http.
        
        // Name, value, expiration date, path, domain, secure flag, http only         
        setcookie('cookie1', rand(100,999), 0, '/', '', false, true); 
        setcookie('cookie2', rand(100,999), 0, '/', '', true, false);
        setcookie('cookie3', rand(100,999), 0, '/', '', false, false);
        
        //Check document.cookie, JavaScript cannot access cookie
        
        echo $_COOKIE["cookie1"], '<br />';
        echo $_COOKIE["cookie2"], '<br />';
        echo $_COOKIE["cookie3"], '<br />';
        ?>
    </body>
</html>
