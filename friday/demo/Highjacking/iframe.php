<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //header("Content-Security-Policy", "frame-ancestors: 'none' "); or 'self', or domain/URI list
        //https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Frame-Options
            $deny = filter_input(INPUT_GET, 'setHeader'); 
            if ( $deny ) {                  
                header('X-Frame-Options: DENY'); 
            }    
        ?>
        
        <h1>This is a PHP page in an I Frame</h1>
        
        <p><a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Frame-Options"> Visit here</a> for more X-Frame options and info</p>
    </body>
</html>
