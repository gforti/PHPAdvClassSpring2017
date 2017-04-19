<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-XSS-Protection
        //Header("Content-Security-Policy: default-src 'none' ");
        Header("X-XSS-Protection: 0");
        session_start();
        
        $s = filter_input(INPUT_POST, 'badHTML');        
        echo htmlspecialchars($s, ENT_QUOTES); 
        echo $s;
        ?>
        
        <form action="#" method="post">
            <input size="60" type="text" name="badHTML" value="<script>alert('Got your cookies! ' + document.cookie);</script>" />
            
            <input type="submit" value="Hack me!" />
        </form>
    </body>
</html>
