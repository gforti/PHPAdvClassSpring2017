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
        
        /*
         * Adding the tokens ensure that only people who can access this page
         * can make a request and the request cannot come from somewhere else
         */
                      
        if( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' ) {
            
            $tokenKey = filter_input(INPUT_POST, 'key');
            $tokenValue = filter_input(INPUT_POST, 'token');
            
            //hash_equals — Timing attack safe string comparison
            if ( array_key_exists($tokenKey, $_SESSION) && hash_equals($_SESSION[$tokenKey], $tokenValue) ) {
                unset($_SESSION[$tokenKey]);
                echo '<p>Form data is safe to process.</p>';
           } else {
                // Log this as a warning and keep an eye on these attempts
                 echo '<p>Form data is NOT safe to process.</p>';
           }
        } 
        
        //Every time we come to the page lets create the token info.
        $name = 'token-' . mt_rand(); 
        $token = uniqid(mt_rand(), true); //use PHP7 with random_bytes(32); 
        $_SESSION[$name] = $token;
        
        ?>
        
        
        <form action="#" method="post">
            Email: <input type="text" name="email" value="" placeholder="email@somewhere.com" />
            <br />
            <input type="hidden" name="key" value="<?php echo $name; ?>" />
            <input type="hidden" name="token" value="<?php echo $token; ?>" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
